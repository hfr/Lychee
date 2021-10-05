<?php

namespace App\Http\Controllers\Administration;

use App\Actions\Settings\Login;
use App\Contracts\LycheeException;
use App\Exceptions\InsufficientFilesystemPermissions;
use App\Exceptions\Internal\InvalidConfigOption;
use App\Exceptions\Internal\QueryBuilderException;
use App\Facades\Lang;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests\UsernamePasswordRequest;
use App\Models\Configs;
use App\Models\Logs;
use App\Rules\AlbumSortingRule;
use App\Rules\LicenseRule;
use App\Rules\OrderRule;
use App\Rules\PhotoSortingRule;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
	/**
	 * Set the Login information of the Lychee configuration
	 * Either they are not already set and we directly bcrypt the parameters
	 * or the current username and password are compared and changed if successful.
	 *
	 * To be noted this function will change the CONFIG table if used by admin
	 * or the USER table if used by any other user
	 *
	 * @param UsernamePasswordRequest $request
	 * @param Login                   $login
	 *
	 * @return void
	 *
	 * @throws LycheeException
	 * @throws ModelNotFoundException
	 */
	public function setLogin(UsernamePasswordRequest $request, Login $login): void
	{
		$login->do($request);
	}

	/**
	 * Define the default sorting type.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setSorting(Request $request): void
	{
		$validated = $request->validate([
			'sorting_photos_col' => ['required', new PhotoSortingRule()],
			'sorting_photos_order' => ['required', new OrderRule(false)],
			'sorting_albums_col' => ['required', new AlbumSortingRule()],
			'sorting_albums_order' => ['required', new OrderRule(false)],
		]);

		Configs::set('sorting_Photos_col', $validated['sorting_photos_col']);
		Configs::set('sorting_Photos_order', $validated['sorting_photos_order']);
		Configs::set('sorting_Albums_col', $validated['sorting_albums_col']);
		Configs::set('sorting_Albums_order', $validated['sorting_albums_order']);
	}

	/**
	 * Set the lang used by the Lychee installation.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setLang(Request $request): void
	{
		$validated = $request->validate([
			'lang' => ['required|string', Rule::in(Lang::get_lang_available())],
		]);
		Configs::set('lang', $validated['lang']);
	}

	/**
	 * Set the layout of the albums
	 * 0: squares
	 * 1: flickr justified
	 * 2: flickr unjustified.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setLayout(Request $request): void
	{
		$validated = $request->validate([
			'layout' => ['required', Rule::in([0, 1, 2])],
		]);
		Configs::set('layout', $validated['layout']);
	}

	/**
	 * Set the dropbox key for the API.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setDropboxKey(Request $request): void
	{
		$validated = $request->validate(['key' => 'present|string|nullable']);
		Configs::set('dropbox_key', $validated['key']);
	}

	/**
	 * Allow public user to use the search function.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setPublicSearch(Request $request): void
	{
		$request->validate(['public_search' => 'required|boolean']);
		Configs::set('public_search', $request->boolean('public_search'));
	}

	/**
	 * Show NSFW albums by default or not.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setNSFWVisible(Request $request): void
	{
		$request->validate(['nsfw_visible' => 'required|boolean']);
		Configs::set('nsfw_visible', $request->boolean('nsfw_visible'));
	}

	/**
	 * Select the image overlay used:
	 * none: no overlay
	 * desc: description of the photo
	 * date: date of the photo
	 * exif: exif information.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setImageOverlayType(Request $request): void
	{
		$validated = $request->validate([
			'image_overlay_type' => [
				'required',
				'string',
				Rule::in(['none', 'desc', 'date', 'exif']),
			],
		]);

		Configs::set('image_overlay_type', $validated['image_overlay_type']);
	}

	/**
	 * Define the default license of the pictures.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setDefaultLicense(Request $request): void
	{
		$validated = $request->validate([
			'license' => ['required', new LicenseRule()],
		]);
		Configs::set('default_license', $validated['license']);
	}

	/**
	 * Enable display of photo coordinates on map.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setMapDisplay(Request $request): void
	{
		$request->validate(['map_display' => 'required|boolean']);
		Configs::set('map_display', $request->boolean('map_display'));
	}

	/**
	 * Enable display of photos on map for public albums.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setMapDisplayPublic(Request $request): void
	{
		$request->validate(['map_display_public' => 'required|boolean']);
		Configs::set('map_display_public', $request->boolean('map_display_public'));
	}

	/**
	 * Set provider of OSM map tiles.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setMapProvider(Request $request): void
	{
		// TODO: It seems as if the configuration option `map_provider` is not read anywhere; do we need it?
		$request->validate([
			'map_provider' => ['required', 'string', Rule::in([
				'Wikimedia',
				'OpenStreetMap.org',
				'OpenStreetMap.de',
				'OpenStreetMap.fr',
				'RRZE',
			])],
		]);

		Configs::set('map_provider', $request['map_provider']);
	}

	/**
	 * Enable display of photos of sub-albums on map.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setMapIncludeSubAlbums(Request $request): void
	{
		$request->validate(['map_include_subalbums' => 'required|boolean']);
		Configs::set('map_include_subalbums', $request->boolean('map_include_subalbums'));
	}

	/**
	 * Enable decoding of GPS data into location names.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setLocationDecoding(Request $request): void
	{
		$request->validate(['location_decoding' => 'required|boolean']);
		Configs::set('location_decoding', $request->boolean('location_decoding'));
	}

	/**
	 * Enable display of location name.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setLocationShow(Request $request): void
	{
		$request->validate(['location_show' => 'required|boolean']);
		Configs::set('location_show', $request->boolean('location_show'));
	}

	/**
	 * Enable display of location name for public albums.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setLocationShowPublic(Request $request): void
	{
		$request->validate(['location_show_public' => 'required|boolean']);
		Configs::set(
			'location_show_public',
			$request->boolean('location_show_public')
		);
	}

	/**
	 * Enable sending of new photos notification emails.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function setNewPhotosNotification(Request $request): void
	{
		$request->validate(['new_photos_notification' => 'required|boolean']);
		Configs::set(
			'new_photos_notification',
			$request->boolean('new_photos_notification')
		);
	}

	/**
	 * Takes the css input text and put it into `dist/user.css`.
	 * This allows admins to actually personalize the look of their
	 * installation.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InsufficientFilesystemPermissions
	 */
	public function setCSS(Request $request): void
	{
		$request->validate(['css' => 'present|nullable|string']);
		$css = $request->get('css') ?? '';

		if (!Storage::disk('dist')->put('user.css', $css)) {
			$msg = 'Could not save css.';
			Logs::error(__METHOD__, __LINE__, $msg);
			throw new InsufficientFilesystemPermissions($msg);
		}
	}

	/**
	 * Returns ALL settings. This is not filtered!
	 * Fortunately, this is behind an admin middleware.
	 * This is used in the advanced settings part.
	 *
	 * @return Collection
	 *
	 * @throws QueryBuilderException
	 */
	public function getAll(): Collection
	{
		try {
			return Configs::query()
				->orderBy('cat')
				->get();
		} catch (\InvalidArgumentException $e) {
			throw new QueryBuilderException($e);
		}
	}

	/**
	 * Get a list of settings and save them in the database
	 * if the associated key exists.
	 *
	 * @param Request $request
	 *
	 * @return void
	 *
	 * @throws InvalidConfigOption
	 */
	public function saveAll(Request $request): void
	{
		$lastException = null;
		foreach ($request->except(['_token', 'function', '/api/Settings::saveAll']) as $key => $value) {
			$value = ($value == null) ? '' : $value;
			try {
				Configs::set($key, $value);
			} catch (InvalidConfigOption $e) {
				$lastException = $e;
			}
		}
		if ($lastException) {
			throw $lastException;
		}
	}
}

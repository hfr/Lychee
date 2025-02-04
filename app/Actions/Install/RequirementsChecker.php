<?php

namespace App\Actions\Install;

class RequirementsChecker
{
	/**
	 * Minimum PHP Version Supported.
	 */
	public const MIN_PHP_VERSION = '8.0.0';

	/**
	 * Check for the server requirements.
	 *
	 * @param array $requirements
	 *
	 * @return array
	 */
	public function check(array $requirements): array
	{
		$results = [];
		$results['errors'] = false;
		foreach ($requirements as $type => $requirement_) {
			switch ($type) {
					// check php requirements
				case 'php':
					foreach ($requirement_ as $requirement) {
						$hasExtension = extension_loaded($requirement);
						$results['requirements'][$type][$requirement] = $hasExtension;
						$results['errors'] |= !$hasExtension;
					}

					if ($this->checkExec()) {
						$results['requirements'][$type]['Php exec() available'] = true;
					} else {
						$results['requirements'][$type]['Php exec() not available (optional)'] = false;
					}

					break;
					// check apache requirements
				case 'apache':
					foreach ($requirement_ as $requirement) {
						// if function doesn't exist we can't check apache modules
						$hasModule = !function_exists('apache_get_modules') || in_array($requirement, apache_get_modules());
						$results['requirements'][$type][$requirement] = $hasModule;
						$results['errors'] |= !$hasModule;
					}
					break;
				default:
					break;
			}
		}

		return $results;
	}

	/**
	 * Check PHP version requirement.
	 *
	 * @param string|null $minPhpVersion
	 *
	 * @return array
	 */
	public function checkPHPVersion(?string $minPhpVersion = null): array
	{
		$minVersionPhp = $minPhpVersion ?: self::MIN_PHP_VERSION;
		$currentPhpVersion = self::getPhpVersionInfo();
		$supported = version_compare($currentPhpVersion['version'], $minVersionPhp) >= 0;

		return [
			'full' => $currentPhpVersion['full'],
			'current' => $currentPhpVersion['version'],
			'minimum' => $minVersionPhp,
			'supported' => $supported,
		];
	}

	/**
	 * Check if exec is enabled. This will allow us to execute the migration.
	 *
	 * @return bool
	 */
	public function checkExec(): bool
	{
		$disabled = explode(',', ini_get('disable_functions'));

		return !in_array('exec', $disabled);
	}

	/**
	 * Get current Php version information.
	 *
	 * @return array
	 */
	private static function getPhpVersionInfo(): array
	{
		$currentVersionFull = PHP_VERSION;
		preg_match('#^\d+(\.\d+)*#', $currentVersionFull, $filtered);
		$currentVersion = $filtered[0];

		return [
			'full' => $currentVersionFull,
			'version' => $currentVersion,
		];
	}
}

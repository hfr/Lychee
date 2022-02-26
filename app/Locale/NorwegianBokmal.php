<?php

namespace App\Locale;

use App\Contracts\Language;

final class NorwegianBokmal implements Language
{
	public function code(): string
	{
		return 'nb-no';
	}

	public function get_locale(): array
	{
		$locale = [
			'USERNAME' => 'brukernavn',
			'PASSWORD' => 'passord',
			'ENTER' => 'Stig inn',
			'CANCEL' => 'Avbryt',
			'SIGN_IN' => 'Logg inn',
			'CLOSE' => 'Lukk',
			'SETTINGS' => 'Innstillinger',
			'SEARCH' => 'Søk ...',
			'MORE' => 'Mer',
			'DEFAULT' => 'Default',

			'USERS' => 'Brukere',
			'U2F' => 'U2F',
			'NOTIFICATIONS' => 'Notifications',
			'SHARING' => 'Deling',
			'CHANGE_LOGIN' => 'Endre Bruker',
			'CHANGE_SORTING' => 'Endre sortering',
			'SET_DROPBOX' => 'Lagre Dropbox',
			'ABOUT_LYCHEE' => 'Om Lychee',
			'DIAGNOSTICS' => 'Diagnostikk',
			'DIAGNOSTICS_GET_SIZE' => 'Hent diskbruk',
			'LOGS' => 'Vis Logg',
			'SIGN_OUT' => 'Logg Ut',
			'UPDATE_AVAILABLE' => 'Oppdatering er tilgjengelig!',
			'MIGRATION_AVAILABLE' => 'Migrering er tilgjengelig!',
			'DEFAULT_LICENSE' => 'Standard lisens for nye opplastinger:',
			'SET_LICENSE' => 'Lagre Lisens',
			'SET_OVERLAY_TYPE' => 'Lagre overvisning',
			'SET_MAP_PROVIDER' => 'Lagre leverandør for OpenStreetMap fliser',

			'SMART_ALBUMS' => 'Automatiske album',
			'SHARED_ALBUMS' => 'Delte album',
			'ALBUMS' => 'Album',
			'PHOTOS' => 'Bilder',
			'SEARCH_RESULTS' => 'Søkeresultater',

			'RENAME' => 'Gi nytt navn',
			'RENAME_ALL' => 'Gi nytt navn til Valgte',
			'MERGE' => 'Slå sammen',
			'MERGE_ALL' => 'Slå sammen Valgte',
			'MAKE_PUBLIC' => 'Gjør Offentlig',
			'SHARE_ALBUM' => 'Del Albumet',
			'SHARE_PHOTO' => 'Del Bilde',
			'VISIBILITY_ALBUM' => 'Albumsynlighet',
			'VISIBILITY_PHOTO' => 'Bildesynlighet',
			'DOWNLOAD_ALBUM' => 'Last ned Albumet',
			'ABOUT_ALBUM' => 'Om Albumet',
			'DELETE_ALBUM' => 'Fjern Albumet',
			'MOVE_ALBUM' => 'Flytt Albumet',
			'FULLSCREEN_ENTER' => 'Gå i Fullskjermvisning',
			'FULLSCREEN_EXIT' => 'Slutt Fullskjermvisning',

			'SHARING_ALBUM_USERS' => 'Share this album with users',
			'WAIT_FETCH_DATA' => 'Please wait while we get the data...',
			'SHARING_ALBUM_USERS_NO_USERS' => 'There are no users to share the album with',
			'SHARING_ALBUM_USERS_LONG_MESSAGE' => 'Select the users to share this album with',

			'DELETE_ALBUM_QUESTION' => 'Fjern Album og Bilder',
			'KEEP_ALBUM' => 'Behold Album',
			'DELETE_ALBUM_CONFIRMATION_1' => 'Ønsker du virkelig å fjerne album',
			'DELETE_ALBUM_CONFIRMATION_2' => 'og alle bildene i det? Denne handlingen kan ikke angres!',

			'DELETE_ALBUMS_QUESTION' => 'Fjern Album og Bilder',
			'KEEP_ALBUMS' => 'Behold Album',
			'DELETE_ALBUMS_CONFIRMATION_1' => 'Ønsker du virkelig å fjerne',
			'DELETE_ALBUMS_CONFIRMATION_2' => 'valgte album og alle bildene i disse? Denne handlingen kan ikke angres!',

			'DELETE_UNSORTED_CONFIRM' => 'Ønsker du virkelig å fjerne alle bilder fra \'Usorterte\'?<br>Denne handlingen kan ikke angres!',
			'CLEAR_UNSORTED' => 'Fjern Usorterte',
			'KEEP_UNSORTED' => 'Behold Usorterte',

			'EDIT_SHARING' => 'Endre Deling',
			'MAKE_PRIVATE' => 'Gjør Privat',

			'CLOSE_ALBUM' => 'Lukk Album',
			'CLOSE_PHOTO' => 'Lukk Bilde',
			'CLOSE_MAP' => 'Lukk Kart',

			'ADD' => 'Legg til',
			'MOVE' => 'Flytt',
			'MOVE_ALL' => 'Flytt Valgte',
			'DUPLICATE' => 'Dupliser',
			'DUPLICATE_ALL' => 'Dupliser Valgte',
			'COPY_TO' => 'Kopier til...',
			'COPY_ALL_TO' => 'Kopier Valgte til...',
			'DELETE' => 'Fjern',
			'DELETE_ALL' => 'Fjern Valgte',
			'DOWNLOAD' => 'Last ned',
			'DOWNLOAD_ALL' => 'Last ned Valgte',
			'UPLOAD_PHOTO' => 'Last opp Bilde',
			'IMPORT_LINK' => 'Importer fra Lenke',
			'IMPORT_DROPBOX' => 'Importer fra Dropbox',
			'IMPORT_SERVER' => 'Importer fra Serveren',
			'NEW_ALBUM' => 'Nytt Album',
			'NEW_TAG_ALBUM' => 'New Tag Album',

			'TITLE_NEW_ALBUM' => 'Legg inn en tittel for det nye albumet:',
			'UNTITLED' => 'Uten Tittel',
			'UNSORTED' => 'Usorterte',
			'STARRED' => 'Favoritter',
			'RECENT' => 'Nylige',
			'PUBLIC' => 'Offentlige',
			'NUM_PHOTOS' => 'Bilder',

			'CREATE_ALBUM' => 'Lag Album',
			'CREATE_TAG_ALBUM' => 'Create Tag Album',

			'STAR_PHOTO' => 'Stjernemerk Bilde',
			'STAR' => 'Stjernemerk',
			'STAR_ALL' => 'Stjernemerk Valgte',
			'TAGS' => 'Tagg',
			'TAGS_ALL' => 'Tagg Valgte',
			'UNSTAR_PHOTO' => 'Fjern Stjernemerke',
			'SET_COVER' => 'Set Album Cover',
			'REMOVE_COVER' => 'Remove Album Cover',

			'FULL_PHOTO' => 'Originalbildet',
			'ABOUT_PHOTO' => 'Om Bildet',
			'DISPLAY_FULL_MAP' => 'Kart',
			'DIRECT_LINK' => 'Direktelenke',
			'DIRECT_LINKS' => 'Direktelenker',

			'ALBUM_ABOUT' => 'Om',
			'ALBUM_BASICS' => 'Grunnleggende',
			'ALBUM_TITLE' => 'Tittel',
			'ALBUM_NEW_TITLE' => 'Legg inn en ny tittel for Albumet:',
			'ALBUMS_NEW_TITLE_1' => 'Legg inn en ny tittel for',
			'ALBUMS_NEW_TITLE_2' => 'valgte album:',
			'ALBUM_SET_TITLE' => 'Lagre Tittel',
			'ALBUM_DESCRIPTION' => 'Beskrivelse',
			'ALBUM_SHOW_TAGS' => 'Tags to show',
			'ALBUM_NEW_DESCRIPTION' => 'Legg inn en ny beskrivelse for Albumet:',
			'ALBUM_SET_DESCRIPTION' => 'Lagre Beskrivelsen',
			'ALBUM_NEW_SHOWTAGS' => 'Enter tags of photos that will be visible in this album:',
			'ALBUM_SET_SHOWTAGS' => 'Set tags to show',
			'ALBUM_ALBUM' => 'Album',
			'ALBUM_CREATED' => 'Laget',
			'ALBUM_IMAGES' => 'Bilder',
			'ALBUM_VIDEOS' => 'Filmer',
			'ALBUM_SUBALBUMS' => 'Underalbum',
			'ALBUM_OWNER' => 'Owner',
			'ALBUM_SHARING' => 'Deling',
			'ALBUM_SHR_YES' => 'JA',
			'ALBUM_SHR_NO' => 'Nei',
			'ALBUM_PUBLIC' => 'Offentlig',
			'ALBUM_PUBLIC_EXPL' => 'Album er synlige for andre, på betingelsene gitt under.',
			'ALBUM_FULL' => 'Original',
			'ALBUM_FULL_EXPL' => 'Fulloppløsningsbilder er tilgjengelig.',
			'ALBUM_HIDDEN' => 'Skjult',
			'ALBUM_HIDDEN_EXPL' => 'Bare folk med direkte lenke kan se Albumet',
			'ALBUM_MARK_NSFW' => 'Mark album as sensitive',
			'ALBUM_UNMARK_NSFW' => 'Unmark album as sensitive',
			'ALBUM_NSFW' => 'Sensitive',
			'ALBUM_NSFW_EXPL' => 'Album is marked to contain sensitive content.',
			'ALBUM_DOWNLOADABLE' => 'Nedlastbar',
			'ALBUM_DOWNLOADABLE_EXPL' => 'Besøkede av galleriet ditt kan laste ned Albumet.',
			'ALBUM_SHARE_BUTTON_VISIBLE' => 'Delingsknappen er synlig',
			'ALBUM_SHARE_BUTTON_VISIBLE_EXPL' => 'Vis lenker for deling på sosiale medier.',
			'ALBUM_PASSWORD' => 'Passord',
			'ALBUM_PASSWORD_PROT' => 'Passordbeskyttet',
			'ALBUM_PASSWORD_PROT_EXPL' => 'Albumet er bare tilgjengelig med et gyldig passord.',
			'ALBUM_PASSWORD_REQUIRED' => 'Albumet er beskyttet med et passord. Fyll inn passordet under for å se bildene i Albumet:',
			'ALBUM_MERGE_1' => 'Ønsker du virkelig slå sammen album',
			'ALBUM_MERGE_2' => 'med album',
			'ALBUMS_MERGE' => 'Ønsker du virkelig å slå sammen alle valge album til albumet',
			'MERGE_ALBUM' => 'Slå sammen Album',
			'DONT_MERGE' => 'Ikke slå sammen',
			'ALBUM_MOVE_1' => 'Ønsker du virkelig å flytte album',
			'ALBUM_MOVE_2' => 'inn i album',
			'ALBUMS_MOVE' => 'Ønsker du virkelig å flytte alle valge album inn i album',
			'MOVE_ALBUMS' => 'Flytt Album',
			'NOT_MOVE_ALBUMS' => 'Ikke flytt',
			'ROOT' => 'Album',
			'ALBUM_REUSE' => 'Bruk om igjen',
			'ALBUM_LICENSE' => 'Lisens',
			'ALBUM_SET_LICENSE' => 'Lagre Lisens',
			'ALBUM_LICENSE_HELP' => 'Trenger du hjelp for å velge?',
			'ALBUM_LICENSE_NONE' => 'Ingen',
			'ALBUM_RESERVED' => 'Alle Rettigheter Forbeholdt',
			'ALBUM_SET_ORDER' => 'Set Order',
			'ALBUM_ORDERING' => 'Order by',

			'PHOTO_ABOUT' => 'Om',
			'PHOTO_BASICS' => 'Grunnleggende',
			'PHOTO_TITLE' => 'Tittel',
			'PHOTO_NEW_TITLE' => 'Fyll inn en ny tittel for bildet:',
			'PHOTO_SET_TITLE' => 'Lagre Tittelen',
			'PHOTO_UPLOADED' => 'Opplastet',
			'PHOTO_DESCRIPTION' => 'Beskrivelse',
			'PHOTO_NEW_DESCRIPTION' => 'Fyll inn en ny beskrivelse for dette bildet:',
			'PHOTO_SET_DESCRIPTION' => 'Lagre Beskrivelsen',
			'PHOTO_NEW_LICENSE' => 'Legg til en Lisens',
			'PHOTO_SET_LICENSE' => 'Lagre Lisens',
			'PHOTO_LICENSE' => 'Lisens',
			'PHOTO_REUSE' => 'Bruk om igjen',
			'PHOTO_LICENSE_NONE' => 'Ingen',
			'PHOTO_RESERVED' => 'Alle Rettigheter Forbeholdt',
			'PHOTO_LATITUDE' => 'Breddegrad',
			'PHOTO_LONGITUDE' => 'Lengdegrad',
			'PHOTO_ALTITUDE' => 'Høyde',
			'PHOTO_IMGDIRECTION' => 'Retning',
			'PHOTO_LOCATION' => 'Sted',
			'PHOTO_IMAGE' => 'Bilde',
			'PHOTO_VIDEO' => 'Film',
			'PHOTO_SIZE' => 'Størrelse',
			'PHOTO_FORMAT' => 'Format',
			'PHOTO_RESOLUTION' => 'Oppløsning',
			'PHOTO_DURATION' => 'Lengde',
			'PHOTO_FPS' => 'Bilderate',
			'PHOTO_TAGS' => 'Tagger',
			'PHOTO_NOTAGS' => 'Ingen Tagger',
			'PHOTO_NEW_TAGS' => 'Fyll inn tagger for dette bildet. Du kan legge inn flere tagger ved å dele de med komma',
			'PHOTO_NEW_TAGS_1' => 'Legg inn tagger for',
			'PHOTO_NEW_TAGS_2' => 'valgte bilder. Tagger vil bli overskrevet. Du kan legge inn flere tagger ved å dele de med komma',
			'PHOTO_SET_TAGS' => 'Lagre Tagger',
			'PHOTO_CAMERA' => 'Kamera',
			'PHOTO_CAPTURED' => 'Tatt',
			'PHOTO_MAKE' => 'Produsent',
			'PHOTO_TYPE' => 'Type/Modell',
			'PHOTO_LENS' => 'Linse',
			'PHOTO_SHUTTER' => 'Lukkertid',
			'PHOTO_APERTURE' => 'Blendertall',
			'PHOTO_FOCAL' => 'Brennvidde',
			'PHOTO_ISO' => 'ISO',
			'PHOTO_SHARING' => 'Deling',
			'PHOTO_SHR_PLUBLIC' => 'Offentlig',
			'PHOTO_SHR_ALB' => 'Ja (Album)',
			'PHOTO_SHR_PHT' => 'Ja (Bilde)',
			'PHOTO_SHR_NO' => 'Nei',
			'PHOTO_DELETE' => 'Fjern Bilde',
			'PHOTO_KEEP' => 'Behold Bilde',
			'PHOTO_DELETE_1' => 'Ønsker du virkelig å fjerne bilde',
			'PHOTO_DELETE_2' => '? Denne handlingen kan ikke angres!',
			'PHOTO_DELETE_ALL_1' => 'Ønsker du virkelig å fjerne',
			'PHOTO_DELETE_ALL_2' => 'valgte bilder? Denne handlingen kan ikke angres!',
			'PHOTOS_NEW_TITLE_1' => 'Fyll inn en tittel for',
			'PHOTOS_NEW_TITLE_2' => 'valgte bilder:',
			'PHOTO_MAKE_PRIVATE_ALBUM' => 'Bildet er i et offentlig album. Synligheten til bildet kan endres gjennom egenskapene for albumet.',
			'PHOTO_SHOW_ALBUM' => 'Vis Album',
			'PHOTO_PUBLIC' => 'Offentlig',
			'PHOTO_PUBLIC_EXPL' => 'Bildet kan bli sett av andre, på betingelsene gitt under.',
			'PHOTO_FULL' => 'Original',
			'PHOTO_FULL_EXPL' => 'Fullopløsningsbildet er tilgjengelig.',
			'PHOTO_HIDDEN' => 'Gjemt',
			'PHOTO_HIDDEN_EXPL' => 'Bare folk med riktig lenke kan se dette bildet.',
			'PHOTO_DOWNLOADABLE' => 'Kan lastes ned',
			'PHOTO_DOWNLOADABLE_EXPL' => 'Besøkende av galleriet kan laste ned dette bildet.',
			'PHOTO_SHARE_BUTTON_VISIBLE' => 'Delingsknappen er synlig',
			'PHOTO_SHARE_BUTTON_VISIBLE_EXPL' => 'Viser lenker for deling på sosiale meder.',
			'PHOTO_PASSWORD_PROT' => 'Passordbeskyttet',
			'PHOTO_PASSWORD_PROT_EXPL' => 'Bildet er bare tilgjengelig med gyldig passord.',
			'PHOTO_EDIT_SHARING_TEXT' => 'Innstillingene for deling av bildet vil bli endret til:',
			'PHOTO_NO_EDIT_SHARING_TEXT' => 'Dette bildet er i et offentlig album som arver synligheten til albumet. Nåværende synlighet er vist bare for informasjon.',
			'PHOTO_EDIT_GLOBAL_SHARING_TEXT' => 'Synligeten til bildet kan bli finjustert gjennom innstillingene til Lychee. Nåværende synlighet er vist bare for informasjon.',
			'PHOTO_SHARING_CONFIRM' => 'Lagre',

			'LOADING' => 'Laster',
			'ERROR' => 'Feil',
			'ERROR_TEXT' => 'Oisann, her ser det ut som noe gikk galt. Vennligst last inn siden på nytt og prøv igjen!',
			'ERROR_DB_1' => 'Kan ikke koble til databasen siden tilgang nektes. Du bør kontrollere adressen, brukernavn, passord, og at du har tilgang fra din nåværende adresse.',
			'ERROR_DB_2' => 'Kan ikke lage databasen. Kontroller at adressen, brukernavn, passord, og at brukeren har rettigheter til å forandre og legge til innhold i databasen.',
			'ERROR_CONFIG_FILE' => "Kan ikke lagre innstillingene. Adgang nektes i <b>'data/'</b>'. Kontroller at andre har rettigheter til å lese, skrive, og execute i <b>'data/'</b> og <b>'uploads/'</b>. Se <b>readme</b> for mer informasjon.",
			'ERROR_UNKNOWN' => 'Noe uventet skjedde. Prøv på nytt og kontroller installasjonen av Lychee og serveren. Se <b>readme</b> for mer informasjon',
			'ERROR_LOGIN' => 'Kan ikke utføre innloggingen. Vennligst prøv med et annet brukernavn og passord!',
			'ERROR_MAP_DEACTIVATED' => 'Kartfunksjoner har blitt deaktivert under innstillinger',
			'ERROR_SEARCH_DEACTIVATED' => 'Søkefunksjoner har blitt deaktivert under innstillinger',
			'SUCCESS' => 'OK',
			'RETRY' => 'Prøv igjen',

			'SETTINGS_SUCCESS_LOGIN' => 'Innlogging oppdatert.',
			'SETTINGS_SUCCESS_SORT' => 'Sorteringsrekkefølge oppdatert.',
			'SETTINGS_SUCCESS_DROPBOX' => 'Dropboxnøkkel oppdatert.',
			'SETTINGS_SUCCESS_LANG' => 'Språk oppdatert',
			'SETTINGS_SUCCESS_LAYOUT' => 'Oppsett oppdatert',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY' => 'Instilling for EXIF overvisning oppdatert',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH' => 'Offentlig søk oppdatert',
			'SETTINGS_SUCCESS_LICENSE' => 'Standard lisens oppdatert',
			'SETTINGS_SUCCESS_MAP_DISPLAY' => 'Innstillinger for Kartvisning oppdatert',
			'SETTINGS_SUCCESS_MAP_DISPLAY_PUBLIC' => 'Innstillinger for Kartvisning for offentlige album oppdatert',
			'SETTINGS_SUCCESS_MAP_PROVIDER' => 'Innstillinger for kartleverandør oppdatert',

			'U2F_NOT_SUPPORTED' => 'U2F not supported. Sorry.',
			'U2F_NOT_SECURE' => 'Environment not secured. U2F not available.',
			'U2F_REGISTER_KEY' => 'Register new device.',
			'U2F_REGISTRATION_SUCCESS' => 'Registration successful!',
			'U2F_AUTHENTIFICATION_SUCCESS' => 'Authentication successful!',
			'U2F_CREDENTIALS' => 'Credentials',
			'U2F_CREDENTIALS_DELETED' => 'Credentials deleted!',

			'NEW_PHOTOS_NOTIFICATION' => 'Send new photos notification emails.',
			'SETTINGS_SUCCESS_NEW_PHOTOS_NOTIFICATION' => 'New photos notification updated',
			'USER_EMAIL_INSTRUCTION' => 'Add your email below to enable receiving email notifications.<br />To stop receiving emails, simply remove your email below.',

			'DB_INFO_TITLE' => 'Fyll inn detaljer om databaseforbindelsen under:',
			'DB_INFO_HOST' => 'Database Adresse (valgfritt)',
			'DB_INFO_USER' => 'Database Brukernavn',
			'DB_INFO_PASSWORD' => 'Database Passord',
			'DB_INFO_TEXT' => 'Lychee vil lage sin egen database. Hvis ønsket kan du isteden benytte navnet på en eksisterende database:',
			'DB_NAME' => 'Database Navn (valgfritt)',
			'DB_PREFIX' => 'Tabellprefix (valgfritt)',
			'DB_CONNECT' => 'Koble til',

			'LOGIN_TITLE' => 'Fyll inn et brukernavn og passord for installasjonen:',
			'LOGIN_USERNAME' => 'Nytt Brukernavn',
			'LOGIN_PASSWORD' => 'Nytt Passord',
			'LOGIN_PASSWORD_CONFIRM' => 'Bekreft Passord',
			'LOGIN_CREATE' => 'Lag Innlogging',

			'PASSWORD_TITLE' => 'Fyll inn ditt nåværende passord:',
			'USERNAME_CURRENT' => 'Nåværende Brukernavn',
			'PASSWORD_CURRENT' => 'Nåværende Passord',
			'PASSWORD_TEXT' => 'Brukernavnet og passordet ditt vil bli endret til det følgende:',
			'PASSWORD_CHANGE' => 'Lagre brukernavn og passord',

			'EDIT_SHARING_TITLE' => 'Endre Deling',
			'EDIT_SHARING_TEXT' => 'Egenskapene for deling for dette albumet vil bli endret til følgende:',
			'SHARE_ALBUM_TEXT' => 'Albumet vil bli delt med følgende egenskaper:',
			'ALBUM_SHARING_CONFIRM' => 'Lagre',

			'SORT_ALBUM_BY_1' => 'Sorter album etter',
			'SORT_ALBUM_BY_2' => 'i en',
			'SORT_ALBUM_BY_3' => 'rekkefølge.',

			'SORT_ALBUM_SELECT_1' => 'Opprettelsestid',
			'SORT_ALBUM_SELECT_2' => 'Tittel',
			'SORT_ALBUM_SELECT_3' => 'Beskrivelse',
			'SORT_ALBUM_SELECT_4' => 'Offentlig',
			'SORT_ALBUM_SELECT_5' => 'Seneste fangstdato',
			'SORT_ALBUM_SELECT_6' => 'Eldste fangstdato',

			'SORT_PHOTO_BY_1' => 'Sorter bilder etter',
			'SORT_PHOTO_BY_2' => 'i en',
			'SORT_PHOTO_BY_3' => 'rekkefølge.',

			'SORT_PHOTO_SELECT_1' => 'Opplastingstid',
			'SORT_PHOTO_SELECT_2' => 'Fangsdato',
			'SORT_PHOTO_SELECT_3' => 'Tittel',
			'SORT_PHOTO_SELECT_4' => 'Beskrivelse',
			'SORT_PHOTO_SELECT_5' => 'Offentlig',
			'SORT_PHOTO_SELECT_6' => 'Stjernemerk',
			'SORT_PHOTO_SELECT_7' => 'Bildeformat',

			'SORT_ASCENDING' => 'Stigende',
			'SORT_DESCENDING' => 'Fallende',
			'SORT_CHANGE' => 'Lagre Rekkefølge',

			'DROPBOX_TITLE' => 'Lagre nøkkel for Dropbox',
			'DROPBOX_TEXT' => "For å importere bilder fra Dropbox trengs en gyldig applikasjonsnøkkel fra <a href='https://www.dropbox.com/developers/apps/create'>deres nettside</a>. Lag en personlig nøkkel og fyll inn denne under:",

			'LANG_TEXT' => 'Endre språk for Lychee til:',
			'LANG_TITLE' => 'Lagre innstilling for språk',
			'PUBLIC_SEARCH_TEXT' => 'Offentlig søk tillatt:',
			'OVERLAY_TYPE' => 'Data som skal brukes til overvisning:',
			'OVERLAY_NONE' => 'None',
			'OVERLAY_EXIF' => 'EXIF bildedata',
			'OVERLAY_DESCRIPTION' => 'Bildebeskrivelser',
			'OVERLAY_DATE' => 'Dato for når bildet ble tatt',
			'MAP_DISPLAY_TEXT' => 'Skru på kart (levert av OpenStreetMap):',
			'MAP_DISPLAY_PUBLIC_TEXT' => 'Skru på kart for offentlige album (levert av OpenStreetMap):',
			'LOCATION_DECODING' => 'Benytt GPS data for å fylle ut stedsnavn',
			'LOCATION_SHOW' => 'Vis stedsnavn',
			'LOCATION_SHOW_PUBLIC' => 'Vis stedsnavn i offentlig modus',
			'MAP_PROVIDER' => 'Leverandør av OpenStreetMap fliser:',
			'MAP_PROVIDER_WIKIMEDIA' => 'Wikimedia',
			'MAP_PROVIDER_OSM_ORG' => 'OpenStreetMap.org (ikke HiDPI)',
			'MAP_PROVIDER_OSM_DE' => 'OpenStreetMap.de (ikke HiDPI)',
			'MAP_PROVIDER_OSM_FR' => 'OpenStreetMap.fr (ikke HiDPI)',
			'MAP_PROVIDER_RRZE' => 'University of Erlangen, Germany (bare HiDPI)',
			'MAP_INCLUDE_SUBALBUMS_TEXT' => 'Inkluder bilder av underalbum på kart:',

			'LAYOUT_TYPE' => 'Oppsett for bilder:',
			'LAYOUT_SQUARES' => 'Kvadratiske miniatyrbilder',
			'LAYOUT_JUSTIFIED' => 'Med aspektratio, justert',
			'LAYOUT_UNJUSTIFIED' => 'Med aspektratio, ikke justert',
			'SET_LAYOUT' => 'Lagre oppsett',

			'NSFW_VISIBLE_TEXT_1' => 'Make Sensitive albums visible by default.',
			'NSFW_VISIBLE_TEXT_2' => 'If the album is public, it is still accessible, just hidden from the view and <b>can be revealed by pressing <hkb>H</hkb></b>.',
			'SETTINGS_SUCCESS_NSFW_VISIBLE' => 'Default sensitive album visibility updated with success.',

			'VIEW_NO_RESULT' => 'Ingen resultater',
			'VIEW_NO_PUBLIC_ALBUMS' => 'Ingen offentlige album',
			'VIEW_NO_CONFIGURATION' => 'Ingen innstillinger',
			'VIEW_PHOTO_NOT_FOUND' => 'Bildet ble ikke funnet',

			'NO_TAGS' => 'Ingen Tagger',

			'UPLOAD_MANAGE_NEW_PHOTOS' => 'Du kan nå håndtere de nye bildene.',
			'UPLOAD_COMPLETE' => 'Opplasting fullført',
			'UPLOAD_COMPLETE_FAILED' => 'Kunne ikke laste opp en eller flere av bildene.',
			'UPLOAD_IMPORTING' => 'Importerer',
			'UPLOAD_IMPORTING_URL' => 'Importerer lenke',
			'UPLOAD_UPLOADING' => 'Laster opp',
			'UPLOAD_FINISHED' => 'Fullført',
			'UPLOAD_PROCESSING' => 'Arbeider',
			'UPLOAD_FAILED' => 'Feilet',
			'UPLOAD_FAILED_ERROR' => 'Opplasting feilet. Serveren svarte med en feil!',
			'UPLOAD_FAILED_WARNING' => 'Opplasting feilet. Serveren svarte med en advarsel!',
			'UPLOAD_CANCELLED' => 'Cancelled',
			'UPLOAD_SKIPPED' => 'Hoppet over',
			'UPLOAD_UPDATED' => 'Updated',
			'UPLOAD_IMPORT_SKIPPED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library.',
			'UPLOAD_IMPORT_RESYNCED_DUPLICATE' => 'This photo has been skipped because it\'s already in your library, but its metadata has been updated.',
			'UPLOAD_ERROR_CONSOLE' => 'Vennligst se konsollen i nettleseren for mer informasjon.',
			'UPLOAD_UNKNOWN' => 'Serveren svarte med en ukjent feilmelding. Vennlist se konsollen i nettleseren for mer informasjon.',
			'UPLOAD_ERROR_UNKNOWN' => 'Opplasting feilet. Serveren svarte med en ukjent feil!',
			'UPLOAD_ERROR_POSTSIZE' => 'Upload failed. The PHP post_max_size may be too small! Otherwise check the FAQ.',
			'UPLOAD_ERROR_FILESIZE' => 'Upload failed. The PHP upload_max_filesize may be too small! Otherwise check the FAQ.',
			'UPLOAD_IN_PROGRESS' => 'Lychee laster for tiden opp!',
			'UPLOAD_IMPORT_WARN_ERR' => 'Importeringen er ferdig, men advarsler eller feil ble returnert. Vennligst see loggen (Innstilinger -> Vis Logg) for mer informasjon.',
			'UPLOAD_IMPORT_COMPLETE' => 'Importering fullført',
			'UPLOAD_IMPORT_INSTR' => 'Vennlist fyll inn en direkte lenke til et bilde for å importere det:',
			'UPLOAD_IMPORT' => 'Importer',
			'UPLOAD_IMPORT_SERVER' => 'Importer fra server',
			'UPLOAD_IMPORT_SERVER_FOLD' => 'Mappen er tom eller inneholder ingen lesbare filer som kan behandles. Vennligst se loggen (Innstillinger -> Vis Logg) for mer informasjon.',
			'UPLOAD_IMPORT_SERVER_INSTR' => 'Denne handlingen vil importere alle bilder, mapper, og undermapper som er plassert i følgende mappe.',
			'UPLOAD_ABSOLUTE_PATH' => 'Full sti til mappen',
			'UPLOAD_IMPORT_SERVER_EMPT' => 'Kunne ikke starte importeringen siden mappen var tom!',
			'UPLOAD_IMPORT_DELETE_ORIGINALS' => 'Fjern originalene',
			'UPLOAD_IMPORT_DELETE_ORIGINALS_EXPL' => 'De opprinnelige filene vil bli fjernet etter importeringen når mulig.',
			'UPLOAD_IMPORT_VIA_SYMLINK' => 'Symbolic links',
			'UPLOAD_IMPORT_VIA_SYMLINK_EXPL' => 'Import files using symbolic links to originals.',
			'UPLOAD_IMPORT_SKIP_DUPLICATES' => 'Skip duplicates',
			'UPLOAD_IMPORT_SKIP_DUPLICATES_EXPL' => 'Existing media files are skipped.',
			'UPLOAD_IMPORT_RESYNC_METADATA' => 'Re-sync metadata',
			'UPLOAD_IMPORT_RESYNC_METADATA_EXPL' => 'Update metadata of existing media files.',
			'UPLOAD_IMPORT_LOW_MEMORY' => 'Lite minne gjenstår!',
			'UPLOAD_IMPORT_LOW_MEMORY_EXPL' => 'Importeringsprossesen på serverren nærmer seg grensen for hvor mye minne som kan brukes, og kan bli avbrutt før den er ferdig.',
			'UPLOAD_WARNING' => 'Advarsel',
			'UPLOAD_IMPORT_NOT_A_DIRECTORY' => 'Stien er ikke en lesbar mappe!',
			'UPLOAD_IMPORT_PATH_RESERVED' => 'Stien er en sti som er reservert for Lychee!',
			'UPLOAD_IMPORT_UNREADABLE' => 'Kan ikke lese filen!',
			'UPLOAD_IMPORT_FAILED' => 'Kan ikke importere filen!',
			'UPLOAD_IMPORT_UNSUPPORTED' => 'Filtypen er ikke støttet!',
			'UPLOAD_IMPORT_ALBUM_FAILED' => 'Kan ikke lage albumet!',
			'UPLOAD_IMPORT_CANCELLED' => 'Import cancelled',

			'ABOUT_SUBTITLE' => 'Selvlevert bildehåndtering den riktige måten!',
			'ABOUT_DESCRIPTION' => 'er et gratis bildehåndteringsverktøy, som kjører på serveren eller en webhost som du eier og kontrollerer. Installasjon tar sekunder. Last opp, håndter, og del bilder som om det er din egen maskin. Lychee leverer alt du trenger, og alle bildene er trygt lagret.',
			'FOOTER_COPYRIGHT' => 'Alle bildene på denne nettsiden er bundet av opphavsrett fra ',
			'HOSTED_WITH_LYCHEE' => 'Levert av Lychee',

			'URL_COPY_TO_CLIPBOARD' => 'Kopier til utklippstavlen',
			'URL_COPIED_TO_CLIPBOARD' => 'Kopierte lenke til utklippstavlen!',
			'PHOTO_DIRECT_LINKS_TO_IMAGES' => 'Direkte lenke til bildefiler:',
			'PHOTO_MEDIUM' => 'Medium',
			'PHOTO_MEDIUM_HIDPI' => 'Medium HiDPI',
			'PHOTO_SMALL' => 'Miniatyr',
			'PHOTO_SMALL_HIDPI' => 'Miniatyr HiDPI',
			'PHOTO_THUMB' => 'Kvadratisk miniatyr',
			'PHOTO_THUMB_HIDPI' => 'Kvadratisk miniatyr HiDPI',
			'PHOTO_LIVE_VIDEO' => 'Filmdel av livebilde',
			'PHOTO_VIEW' => 'Lychee Bildevisning:',

			'PHOTO_EDIT_ROTATECWISE' => 'Roter med klokken',
			'PHOTO_EDIT_ROTATECCWISE' => 'Roter mot klokken',
		];

		return $locale;
	}
}

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| IONIZE LANGUAGES
| -------------------------------------------------------------------
| Contains the available languages definitions for the front-end.
| Auto-generated by Ionizes Language administration.
| Changes made in this file will be overwritten by languages save in Ionize.
|
|
*/

// Default admin language code
$config['default_admin_lang'] = 'en';

// Default language code
// This code depends on the language defined through the Ionize admin panel
// and will never change during the request process 
$config['default_lang_code'] = 'fr';

// Used language code
// Dynamically changed by the Router depending on the browser, cookie or asked URL
// By default, Ionize set it to the default lang code.
$config['detected_lang_code'] = 'fr';

// Available languages
// Languages set through Ionize. Includes offline languages
$config['available_languages'] = array(
	'en' => 'english',
	'fr' => 'Françcais'
	);

// Online languages
// Languages set online through Ionize.
$config['online_languages'] = array(
	'fr' => 'Françcais'
	);

// Set by Router only during language detection
$config['uri_lang_code'] = '';
$config['route_lang_code'] = '';



/* End of file language.php */
/* Auto generated by Language Administration on : 2013.04.21 23:15:04 */
/* Location: ./application/config/language.php */

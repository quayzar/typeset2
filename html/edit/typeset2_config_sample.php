<?php

/**
 * Environment-specific configuration file
 * 
 * This file contains all sensitive, environment-specific settings needed
 * for an installation of typeset2 (http://typeset2.resen.co). 
 * 
 * To use, save a copy of this file (without the "_sample" suffix) either
 * to the web root or (better yet) one level above, then modify the settings.
 * 
 * Unsure where to put it? Read more about placement here:
 * https://wordpress.stackexchange.com/q/58391
 * 
 * As this file will contain sensitive information, it should NOT be 
 * committed to the project repository.
 */

/**
 * Additional subdirectory
 * If the website is located at the web root, leave this blank. However, if
 * the website is located within a subdirectory in the hosting environment 
 * (such as a project-specific subdirectory within a development environment),
 * enter the subdirectory here, with a trailing slash.
 */
define( 'ADDL_SUBDIR', '' );

/* Database credentials */
define( 'DB_HOST',		'' );
define( 'DB_NAME',		'' );
define( 'DB_USER',		'' );
define( 'DB_PASSWORD',	'' );

/* Admin credentials */
define( "ADMIN_CREDENTIALS", array(
	(object) array(
		'email'		=> '',
		'password'	=> '' // use /edit/actions/pw or PHP's "password_hash" function to generate
	),
/* uncomment / copy this to add more admins
	(object) array(
		'email' => '',
		'password' => ''
	),
*/
) );

/**
 * PHP error reporting
 * https://secure.php.net/manual/en/function.error-reporting.php
 */
error_reporting( 0 );
ini_set( 'display_errors', 0 );


<?php defined('ENVIRONMENT') OR exit('No direct script access allowed');

/*
 *---------------------------------------------------------------
 * ENVIRONMENTAL CONSTANTS
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_API',    php_sapi_name() );
define('CI_CLI',    CI_API === 'cli' );
define('CI_DEBUG',  TRUE );

/*
 *---------------------------------------------------------------
 * APPLICATION DOMAIN SETTINGS
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */

define('CI_DOMAIN',     'project');
define('CI_PROTOCOL',   (! empty($_SERVER['HTTPS']) ? 'https' : 'http'));
define('CI_HOST',       CI_CLI ? '' : $_SERVER['HTTP_HOST']);
define('CI_PORT',       CI_CLI ? '' : $_SERVER['SERVER_PORT']);
define('CI_BASEURL',    CI_PROTOCOL . '://' . CI_HOST );

/*
 *---------------------------------------------------------------
 * DATABASE SETTINGS
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_DB_HOST',    'localhost');
define('CI_DB_USER',    'root');
define('CI_DB_PASS',    'root');
define('CI_DB_NAME',    '');

/*
 *---------------------------------------------------------------
 * COMPOSER
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_COMPOSER',   TRUE);

/*
 *---------------------------------------------------------------
 * ENCRYPTION
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_CRYPT_SALT',  '5YuwFa[KB:H5jPvkf<Uunr,Mhjkc0[c|z|i[CT$1uGgX1y.Y2&vDye1M&cKKB#P');
define('CI_CRYPT_KEY',   'D6p4JD9kE1EoHMjE99my1AKe4m5myVlK' );

/*
 *---------------------------------------------------------------
 * SSL
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_SSL',         !! (CI_PORT === 443) );
define('CI_SSL_CERT',    '' );
define('CI_SSL_KEY',     '' );

/*
 *---------------------------------------------------------------
 * FORMATTING
 *---------------------------------------------------------------
 *
 * Path to the environment config file, relative to the front 
 * controller directory. This is required.
 */
define('CI_DATE_FORMAT', 'Y-m-d H:i:s');

/*
 *---------------------------------------------------------------
 * CACHE SETTINGS
 *---------------------------------------------------------------
 *
 * Path to the cache directory
 * default application/cache
 */

define('CI_CACHE_PATH', '');

/*
 *---------------------------------------------------------------
 * LOG SETTINGS
 *---------------------------------------------------------------
 *
 * Path to the cache directory
 * default application/logs
 */

define('CI_LOG_PATH', '');
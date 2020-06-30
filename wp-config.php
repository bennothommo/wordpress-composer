<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

// Load Composer's autoloader
require_once __DIR__ . '/content/vendor/autoload.php';

// Load configuration
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Path config
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/wordpress/');
}
define('WP_HOME', $_ENV['WP_SITEURL']);
define('WP_SITEURL', $_ENV['WP_SITEURL'] . '/wordpress');
define('WP_CONTENT_DIR', __DIR__ . '/content');
define('WP_CONTENT_URL', $_ENV['WP_HOME'] . '/content');
define('WP_PLUGIN_DIR', __DIR__ . '/content/plugins');
define('WP_PLUGIN_URL', $_ENV['WP_HOME'] . '/content/plugins');

// Database config
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_CHARSET', $_ENV['DB_CHARSET']);
define('DB_COLLATE', $_ENV['DB_COLLATE']);

// Encryption key config
define('AUTH_KEY', $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY', $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY', $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY', $_ENV['NONCE_KEY']);
define('AUTH_SALT', $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT', $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT', $_ENV['NONCE_SALT']);

// Site configuration
define('WP_DEBUG', $_ENV['WP_DEBUG']);
define('WP_POST_REVISIONS', $_ENV['WP_POST_REVISIONS']);
define('AUTOSAVE_INTERVAL', $_ENV['AUTOSAVE_INTERVAL']);
define('WP_ALLOW_MULTISITE', $_ENV['WP_ALLOW_MULTISITE']);

// Advanced configuration
define('FORCE_SSL_ADMIN', $_ENV['FORCE_SSL_ADMIN']);
define('SCRIPT_DEBUG', $_ENV['SCRIPT_DEBUG']);
define('CONCATENATE_SCRIPTS', $_ENV['CONCATENATE_SCRIPTS']);
define('WP_MEMORY_LIMIT', $_ENV['WP_MEMORY_LIMIT']);
define('WP_MAX_MEMORY_LIMIT', $_ENV['WP_MAX_MEMORY_LIMIT']);
define('DISABLE_WP_CRON', $_ENV['DISABLE_WP_CRON']);
define('EMPTY_TRASH_DAYS', $_ENV['EMPTY_TRASH_DAYS']);
define('IMAGE_EDIT_OVERWRITE', $_ENV['IMAGE_EDIT_OVERWRITE']);

// ----- The following constants are forced, and cannot be overriden by the .env configuration

// Disable automatic updates, as we're using Composer
define('AUTOMATIC_UPDATER_DISABLED', true);
define('WP_AUTO_UPDATE_CORE', false);

$table_prefix = $_ENV['TABLE_PREFIX'] ?? 'wp_';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

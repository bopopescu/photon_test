<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5reAVIJv9TzL2pLHR8GjdMsRvEetP8ZJ5NSWoRi5/kPNXnZYKh12EoUsDsQV3B32zuIgzHAij6FnJXs6dRfMpw==');
define('SECURE_AUTH_KEY',  'gSi6l27gJlRSsHBbmafJmUCDv0MMzB6pVZ5kFxi6p4pBuSzgoo3TMSbT2a4x0dUNqngvUGnp0vkYYW8Yu1XH6w==');
define('LOGGED_IN_KEY',    'ITC5uuMoerY6mAu0nD19LQHqjEymJJ8EjB72rnH8UOZ+21z/0ZvwVuxZzhspL/zhxAWE5PWxGZ5Z7l8Cgv//BA==');
define('NONCE_KEY',        'yyQmOeSJulJX2oUxlzpaMjCGK7THcvlcCscwdmS0kYd9LI8+MBZUmklYztb6D5EpNLcxBaCfQQb5o4gXAmQxFw==');
define('AUTH_SALT',        'K8e8g4mjIQixSd2SQt5wprAudM+sW0orxr2H2QHWzZCqC/9pRp6J6T4KbG5rlJpDAyMKO8yoymTdlHzw1PFANA==');
define('SECURE_AUTH_SALT', 'frjlAuu1KClwsSapm68/3e95mEJgtA7SUGDQAn1FZeS5lFmHd/lxly5t9NYFs83gDkA0gJz1jsxTwas6dS8bNA==');
define('LOGGED_IN_SALT',   'pKDH/JblYXykSTiMQJoWWvdxjy+TH9oIcvEdBVlzjHxjCMGYIp7k37rRJf+FPoMLyzH6I9DYLVMU7Frg5GNnWA==');
define('NONCE_SALT',       'BM8AKhMAcagzAKpwpMJpYul95zjes5nERdKg3sgRkM+RPZGMIBzpOqi19N1EJ6h4PdgGALk85AyJptU1kb5nlw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

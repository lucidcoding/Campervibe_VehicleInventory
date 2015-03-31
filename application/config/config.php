<?php

/**
 * Configuration
 *
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/**
 * Configuration for: Error reporting
 * Useful to show every little problem during development, but only show hard errors in production
 */
error_reporting(E_ALL);
ini_set("display_errors", 1);

/**
 * Configuration for: Project URL
 * Put your URL here, for local development "127.0.0.1" or "localhost" (plus sub-folder) is fine
 */
define('URL', 'http://localhost:3306/');

/**
 * Configuration for: Database
 * This is the place where you define your database credentials, database type etc.
 */
//define('DB_TYPE', 'mysql');
//define('DB_HOST', '127.0.0.1');
//define('DB_NAME', 'campervibeVehicleInventory');
//define('DB_USER', 'root');
//define('DB_PASS', '');
//
//define('DB_TYPE', 'mysql');
//define('DB_HOST', 'eu-cdbr-azure-north-c.cloudapp.net');
//define('DB_NAME', 'as_1e3b9273989bc6e');
//define('DB_USER', 'b6b7f8d99c76f5');
//define('DB_PASS', '2b9895e9');
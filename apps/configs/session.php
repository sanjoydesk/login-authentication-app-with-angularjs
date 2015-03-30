<?php
if (!defined('CF_SYSTEM')) {
    exit('External script access not allowed');
}

return array(
    'driver' => 'native', // native, database

    'session_name'  => 'cf_secure_session',

    'path' => 'default', // Framework default Session path is apps/temp/sessions/

    'timeout' => 1440,

    'table' => 'cf_sessions',

    'session_cookie_name' => '',

    'database_name' => 'cygnite', // your database name

    'httponly' => true,

    'secure' => false,

    'cf_session' => '' // Remove this from configuration
);
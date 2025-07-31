<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '82bc55d35831594fbca0d7bfeacca55bad7f1f447cfd07e3b23c8e00a3d03a0d'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
    'default' => [
        'host' => 'localhost',
        'username' => 'root',
        'password' => '',
        'database' => 'inkywinky',
        'driver' => 'Cake\Database\Driver\Mysql',
        'persistent' => false,
        'timezone' => 'UTC',
        'encoding' => 'utf8mb4',
        'flags' => [],
        'cacheMetadata' => true,
        'log' => false,
        'quoteIdentifiers' => false,
    ],
],


    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
'EmailTransport' => [
    'default' => [
        'className' => 'Smtp',
        'host' => 'smtp.gmail.com',
        'port' => 587,
        'username' => 'aaina8200@gmail.com',
        'password' => 'zwxy euhb hgdk qrox',
        'tls' => true,
    ],
],

];
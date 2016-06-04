<?php

/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */

if(! defined('ENVIRONMENT')) {
    $envPath = APP_CWD . '/../env.php';

    if(! file_exists($envPath)) {

        $env = getenv('APP_ENV');

        if(! empty($env)) {
            define('ENVIRONMENT', $env);
        } else {
            throw new \Exception("Nessun file di environment disponibile in: {$envPath}");
        }


    }

}


if(! defined('ENVIRONMENT')) {
    throw new \Exception("Nessuna costante ENVIRONMENT configurata");
}

switch(ENVIRONMENT)
{
    default:
    case 'local':
    case 'locl':
    case 'team':
    case 'vagrant':



    break;

    // --------------------------------------------------------------------



    case 'dev':
    case 'development':

        define( 'DEBUG',                       true);
        define( 'BASE_URL',                    'locl.shop.jambonsalumeria.com');



    break;

    // --------------------------------------------------------------------


    case 'stage':
    case 'staging':

        die('Nessun ambiente configurato per Staging');

    break;

    // --------------------------------------------------------------------

    case 'prod':
    case 'production':

        die('Nessun ambiente configurato per Production');


    break;

}

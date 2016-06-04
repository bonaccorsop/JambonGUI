<?php

define('APP_CWD', __DIR__ . '/..');

//bootloading delle dipendenze
require_once APP_CWD . '/bootstrap.php';


Flight::set('flight.views.path', APP_CWD . '/app/views');


require_once APP_CWD . '/app/routes.php';




Flight::start();
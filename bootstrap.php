<?php

//autoload di composer
require_once APP_CWD . '/vendor/autoload.php';

//costanti di ambiente
require_once APP_CWD . '/app/config/environment.php';

//costanti di applicazione
//require_once APP_CWD . '/app/config/constants.php';

//Impostazione del Timezone
//date_default_timezone_set(APP_TIMEZONE);

// --------------------------------------------------------------------

//setup del dumper
use Symfony\Component\VarDumper\VarDumper;
use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\Dumper\HtmlDumper;

VarDumper::setHandler(function ($var) {
    $cloner = new VarCloner();
    $dumper = 'cli' === PHP_SAPI ?
        new CliDumper() :
        new HtmlDumper();
    $dumper->dump($cloner->cloneVar($var));
});

// --------------------------------------------------------------------



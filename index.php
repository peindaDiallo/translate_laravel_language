<?php

use Atpro\Translate\service\TranslateService;

require './vendor/autoload.php';

ini_set('max_execution_time', 300000000);
microtime(true);

$translateService= new TranslateService();
try {
    $translateService->translate("./lang/en",'./lang','en',['fr','es','it','de']);
} catch (ErrorException $e) {
    die($e->getMessage());
}
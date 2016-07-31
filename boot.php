<?php

error_reporting(E_ALL);

require_once "vendor/autoload.php";
require "../function/request_functin.php";

function loadClassFile($name)
{
    $name = str_replace('\\', '/', $name);

    $file = "../classes/" . $name . ".php";

    if (file_exists($file)) {
        require_once $file;

    } 
}

;

spl_autoload_register("loadClassFile");
/**
 * Created by PhpStorm.
 * User: operator
 * Date: 16.07.2016
 * Time: 14:58
 */

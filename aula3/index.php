<?php

include("request.php");

$met = $_SERVER['REQUEST_METHOD'];
$prot = substr($_SERVER['SERVER_PROTOCOL'], 0, -4);
$varip = $_SERVER['SERVER_NAME'];
$rmtip = $_SERVER['SERVER_ADDR'];
$rcs = substr($_SERVER['REQUEST_URI'], 1, 5);
$param = $_SERVER['QUERY_STRING'];


$request = new Request($met, $prot, $varip, $rmtip, $rcs, $param);
var_dump($request);

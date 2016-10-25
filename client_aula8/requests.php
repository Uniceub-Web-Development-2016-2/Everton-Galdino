<?php

include('httpful.phar');

$get_request = 'http://172.22.51.134/aula8/user/create';
//sendsJson()
//$json = body(json_encode($_POST));

$response = \Httpful\Request::post($get_request)->sendsJson()->body(json_encode($_POST))->send(); 
echo  $response->body;

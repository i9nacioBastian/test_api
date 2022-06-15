<?php
include('httpful.phar');

$response = \Httpful\Request::get('http://18.189.241.229:3000/acciones')
->sendsJson()
->send();
$results = $response;
echo '<pre>';
print_r($results->body);
echo '</pre>';

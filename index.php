<?php
error_reporting( E_ALL );
$request=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request =substr($request, strpos($request, 'index.php'));
$request = explode('/',$request);
$function=$request[1];
if(empty($function)){
    $function="index";
}
unset($request[0]);
unset($request[1]);
include_once('Core/Controller.php');
include('Views/Header.php');
$controller = new controller();
call_user_func_array(array($controller,$function),$request);
include('Views/Footer.php');
<?php

session_start();
if(!empty($_POST['password'])){
    if($_POST['username']=="admin"&&$_POST['password']=="password"){
        $_SESSION['isLoggedIn']=true;
    }
}
if($_SESSION['isLoggedIn']){
include("Core/util.php");
//error_reporting( E_ALL );
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
}else{
    include("Core/util.php");
    include('Views/Header.php');
    ?>
    <center>
    <form class="login" action="." method="post" accept-charset="utf-8">
<div class="login">
<fieldset class="login">
<legend>Login Information:</legend>
    <label for="">Email:</label><input type="text" name="username" value="" id="username" />    <label for="">Password:</label><input type="password" name="password" value=""  />    <input type="submit" name="submit" value="Log In"  />    <span style="float:right">
    <a href="#">Forgot your password?</a>    </span>
</fieldset>
</div>
</form>
</center>
    <?php
    include('Views/Footer.php');
}
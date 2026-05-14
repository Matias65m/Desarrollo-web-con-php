<?php

//Iniciar o reanudar la sesion del ususuario actual

session_start();

//echo '<pre>';
//var_dump($_SESSION);
//echo '</pre>';

if(isset($_SESSION["user_id"])){
    //el usuario esta logueado

    header("Location: dashboard/");
    exit(); //siempre que hata un redireccionamiento 

}else{
    //si no es porque no hay ususario
    header("Location: user/login/");
    exit();
}


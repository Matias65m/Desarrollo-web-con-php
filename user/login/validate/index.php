<?php

session_start();

if(isset($_SESSION["user_id"])){
    // El usuario está logueado
    header("Location: ../../../dashboard/");
    exit(); // Siempre que haya un redireccionamiento 

}
        
        $formUsername = $_POST['username'];
        $formPassword = $_POST['password'];

        $user = 'proyecto@web.cl';
        $pass = 'holaMundo!';

        if($user === $formUsername && $pass === $formPassword){
            $_SESSION['user_id'] = 1;
            $_SESSION['user_name'] = 'Profe :)';
             
            header("Location: ../../../dashboard/");
            exit(); 

        } 
            echo 'Usuario y contraseña incorrecta';
           
    

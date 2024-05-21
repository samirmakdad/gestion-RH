<?php

    if(isset($_POST['logout'])) {


        // Destroy the session
        session_start();
        session_unset();
        session_destroy();
        
        // Redirect to the login page or any other desired page
        header("connexion.php");
        exit;
    }
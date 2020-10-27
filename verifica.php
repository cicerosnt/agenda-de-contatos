<?php

    session_start();
    if(!isset($_SESSION['navigation'])){
        header('Location: login');
        exit();
    }

?>
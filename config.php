<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '#5752cicinhO$');
    define('DB', 'php');

    define('PATH','http://localhost/php');

    $com = mysqli_connect(HOST, USER, PASS, DB) or die ('Não foi possivel conectar');

?>
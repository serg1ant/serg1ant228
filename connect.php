<?php
    $user = 'root';
    $pass = '';
    $dsn = "mysql:host=localhost;dbname=ajax;charset=utf8";

    $db = new PDO($dsn, $user, $pass);
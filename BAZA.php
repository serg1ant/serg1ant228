<?php
    require_once 'connect.php';
    $input = $_POST['title'];
    $textarea = $_POST['text'];

    $sql = "INSERT INTO `ajax`(`input`, `text_area`) VALUES ('$input','$textarea')";

    $db->query($sql);
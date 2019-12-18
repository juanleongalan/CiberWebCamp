<?php
    $conn = new mysqli('localhost', 'root', '', 'ciberwebcamp');

    if($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
?>
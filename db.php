<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "advokat";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Ошибка".mysqli_connect_error());
    }

    else {
        "Успешно";
    }

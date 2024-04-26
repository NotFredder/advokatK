<?php
    define("db_host","");
    define("db_user","");
    define("db_password","");
    define("db_name","");

    $mysql = new mysqli(db_host, db_user, db_password, db_name);
    if ($mysql->connect_errno)  exit('ошибка подключения к БД');
    $mysql ->set_charset('utf8');
    $mysql -> close()
?>
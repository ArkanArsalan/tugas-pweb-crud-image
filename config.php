<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "sekolah";

    try {
        $db = mysqli_connect($server, $user, $password, $nama_database);
    } catch(mysqli_sql_exception) {
        echo "Could not connect";
    }

?>
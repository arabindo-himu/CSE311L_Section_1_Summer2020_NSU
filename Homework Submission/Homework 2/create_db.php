<?php

$link = mysqli_connect('localhost', 'root', '');

if ($link == false) {
    die ("Error: could not connect. " .mysqli_connect_error());
}

$sql = "CREATE DATABASE HOMEWORK_2";

if (mysqli_query($link, $sql)) {
    echo "DB Created";
} else {
    echo "Error: Could not able to create DB." .mysqli_error($link);
}

mysqli_close($link)

?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'VS_CODE_TEST');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO test_table (id, username, password) VALUES ('1', 'DEMO', 'DEMO')";

if (mysqli_query($link, $sql)) {
    echo "Values inserted";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}

mysqli_close($link)

?>
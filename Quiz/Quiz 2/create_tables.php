<?php

$link = mysqli_connect('localhost', 'root', '', 'QUIZ_2');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Jobs(
    JOB_ID VARCHAR(10) PRIMARY KEY,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY NUMBER(6),
    MAX_SALARY NUMBER(6)
)";

if (mysqli_query($link, $sql)) {
    echo "Location table created.\n";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

mysqli_close($link)

?>
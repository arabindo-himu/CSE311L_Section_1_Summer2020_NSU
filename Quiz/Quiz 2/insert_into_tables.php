<?php

$link = mysqli_connect('localhost', 'root', '', 'QUIZ_2');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "INSERT INTO Jobs
                (JOB_ID, JOB_TITLE, MIN_SALARY, MAX_SALARY) VALUES
                ('AD_PRESS', 'PRESIDENT', 20000, 40000),
                ('AS_VP', 'Administration Vice President', 15000, 30000),
                ('AS_ASST', 'Administration Assistant', 3000, 6000),
                ('AS_VP', 'Administration Vice President', 15000, 30000),
                ('AC_MGR', 'Account Manager', 8200, 16000),
                ('AC_ACCOUNT', 'Public Account', 4200, 9000)
                ('SA_MAN', 'Sales Manager', 10000, 20000),
                ('SA_REP', 'Sales Representative', 6000, 12000),
                ('ST_MAN', 'Stock Manager', 5500, 8500),
                ('ST_CLERK', 'Stock Clerk', 2000, 5000),
                ('IT_PROG', 'Programmer', 4000, 10000),
                ('MK_MAN', 'Marketing Manager', 9000, 15000),
                ('MK_REP', 'Marketing Representative', 4000, 9000)";

if (mysqli_query($link, $sql)) {
    echo "Values inserted into Locations table\n";
} else {
    echo "Error: could not able to insert into table " .mysqli_error($link);
}


mysqli_close($link)

?>
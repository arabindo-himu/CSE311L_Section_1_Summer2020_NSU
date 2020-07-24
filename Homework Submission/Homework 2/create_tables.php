<?php

$link = mysqli_connect('localhost', 'root', '', 'HOMEWORK_2');

if ($link == false) {
    die ("Error: Could not connect. " .mysqli_connect_error());
}

$sql_locations = "CREATE TABLE Locations(
    Location_id int(4) PRIMARY KEY,
    Street_Address VARCHAR(40),
    Postal_Code VARCHAR(12),
    City VARCHAR(30) NOT NULL,
    State_Province VARCHAR(25),
    Country_id VARCHAR(2)
)";

if (mysqli_query($link, $sql_locations)) {
    echo "Location table created.\n";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_departments = "CREATE TABLE Departments(
    Department_id int(5) PRIMARY KEY,
    Department_Name VARCHAR(25) NOT NULL,
    Manager_id int(5),
    Location_id int(5) NOT NULL
)";

if (mysqli_query($link, $sql_departments)) {
    echo "Departments table created.\n";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

$sql_employees = "CREATE TABLE Employees(
    Employee_Id int(6) PRIMARY KEY,
    First_Name VARCHAR(20),
    Last_Name VARCHAR(25) NOT NULL,
    Email VARCHAR(25) NOT NULL,
    Phone_Number VARCHAR(18),
    Hire_Date DATE NOT NULL,
    Job_Id VARCHAR(10) NOT NULL,
    Salary int(8),
    Commission_pct int(2),
    Manager_id int(6),
    Department_Id int(4)
)";

if (mysqli_query($link, $sql_employees)) {
    echo "Employees table created.";
} else {
    echo "Error: could not able to create table " .mysqli_error($link);
}

mysqli_close($link)

?>
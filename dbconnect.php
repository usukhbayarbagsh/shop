<?php
//Khoi Hoang - Team 3.

//Connect to database.
$DBcon = new mysqli("localhost", "root", "", "cart1");

if ($DBcon->connect_errno) {
    die ("Error: ". $DBcon->connect_error);
}
?>
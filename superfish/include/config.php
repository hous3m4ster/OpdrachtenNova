<?php
$usr = "root";
$pass = "";
$serv = "localhost";
$db = "login";

$ms = new mysqli($serv, $usr,$pass,$db);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
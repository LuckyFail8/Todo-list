<?php

$hostname = 'localhost';
$username = 'root';
$password = 'root';
$database = 'to_do_list';

$connect = new mysqli($hostname, $username, $password, $database);

if ($connect->connect_error) {
    die("connection failed: " . $connect->connect_error);
}

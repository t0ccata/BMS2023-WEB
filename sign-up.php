<?php

$server_name="localhost"
$username="root"
$password=""
$database="bms2023"

$conn = new mysqli($server_name, $username, $password, $database);

$email = $_POST('email');
$fullname = $_POST('full_name');
$password = $_POST('password');

$sql = "INSERT INTO user(full_name, email, password) VALUE('$fullname', '$email', '$password')";

$res = mysqli_query($conn_$sql);
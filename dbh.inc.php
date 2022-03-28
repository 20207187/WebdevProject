<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$servername = "project";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$servername);

if (!$conn) {
	die("connection failed: " . mysqli_connect_error());
}
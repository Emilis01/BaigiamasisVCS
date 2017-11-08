<?php
	// Apsirašome parametrus
	$servername = "localhost"; //prisijungimui prie MySql kelias (localhost siuo atveju mano paties kompe)
	$username = "root";
	$password = "";
	$dbname = "office_db";

	// Sukuriamas prisijungimas
	$conn = new mysqli($servername, $username, $password, $dbname); //palikau tik ta ko mum reikia

	// Patikriname prisijungimą
	if($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
?>

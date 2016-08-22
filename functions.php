<?php

//databaasiga yhendus, kuigi seda selleks ylesandeks pole vaja

function connect_database(){
	global $connection;
	$host="localhost";
	$user="test";
	$pass="t3st3r123";
	$db="test";
	$connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga- ".mysqli_error());
	mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
}

function homepage() {

	//lehekylje hindamine (tekstifailiga)

	$hindefail = 'hinded.txt';

	if (isset($_POST['upload'])) {

		$saadetudhinne = htmlspecialchars($_POST['hinne']);		

		file_put_contents($hindefail, $saadetudhinne. "\n", FILE_APPEND);

	}

	$lines = array();

	$lines=file($hindefail);

	$avg = array_sum($lines)/count($lines);

	include_once('home.html');
}




?>
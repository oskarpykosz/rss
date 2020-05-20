<?php

$servername = 'mysql-660824.vipserv.org';
$dbUsername = 'makeup_rss';
$dbPassword = 'Wsb123';
$dbName = 'makeup_rss';

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if(!$conn) {
	die("Błąd połączenia z bazą danych: ".mysqli_connect_error());
}

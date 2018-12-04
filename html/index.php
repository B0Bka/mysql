<?php
//phpinfo();
$host = 'mysql';
$port = '3306';
$dbname = 'lessons';
$username = 'root';
$password = 'pass';
try {
    $mysql = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Connected to $dbname at $host successfully.";
} catch (PDOException $pe) {
    echo("Could not connect to the database $dbname :" . $pe->getMessage());
}

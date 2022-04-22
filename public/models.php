<?php
$connection = new PDO("mysql:host=localhost;dbname=gitebis", 'root', '');

$result = $connection->query('SELECT id, title FROM hebergements');

$posts = [];
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
$posts[] = $row;
}

$connection = null;

// include the HTML presentation code
require 'templates/list.php';?>
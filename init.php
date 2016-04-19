<?php

$conn = "mysql:host=localhost;dbname=ads_new;charset=utf8";
$opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($conn, 'root', '', $opt);
$result = $pdo->query('SELECT * FROM ads');

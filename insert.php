<?php

$host = 'localhost';
$db   = 'esercizio s1-l3';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;dbname=$db";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

// comando che connette al database
$pdo = new PDO($dsn, $user, $pass, $options);

$stmt = $pdo->prepare("INSERT INTO utenti (nome, email, phone, title) VALUES (:nome, :email, :phone, :title)");
$stmt->execute([
    'nome' => 'bugo',
    'email' => 'bugo@mail.it',
    'phone' => '324857465',
    'title' => 'astrofisico',

]);


header("Location: /EsercizioS1-L3-database-/");
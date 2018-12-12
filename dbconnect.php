<?php
// Входные данные для подключения к БД
$host = "localhost";
$user = "root";
$pwd = "";
$db = "b001";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db; charset=$charset";
$opt = [
    PDO:: ATTR_ERRMODE                => PDO::ERRMODE_EXCEPTION,
    PDO:: ATTR_DEFAULT_FETCH_MODE     => PDO::FETCH_ASSOC,
    PDO:: ATTR_EMULATE_PREPARES       => false,
];

// Визуальное отображение ошибок
try {
  $pdo = new PDO($dsn, $user, $pwd, $opt);
} 
catch(PDOException $e) {
  echo $e->getMessage();
}
?>

<?php
$serv = 'localhost';
$bdd = 'mgvpclocal';
$user = 'root';
$mdp = '';

try {
    $pdo = new PDO("mysql:host=$serv;dbname=$bdd;charset=utf8", $user, $mdp);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>

<?php
// Localhost XAMPP Configuration
$host = 'localhost';
$dbname = 'nahal_honey'; // Database ka naam jo hum abhi banayenge
$username = 'root';       // XAMPP ka default username
$password = '';           // XAMPP mein default password khali hota hai

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    die("Database Connection Failed: " . $e->getMessage());
}
?>
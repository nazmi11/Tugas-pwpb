<?php

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
$query = $db->query("UPDATE pengguna SET username='$username', password='$password', role='$role' WHERE id='$id'");

if($query){
    header("location:admin.php");
}
<?php
$id = $_GET['id'];

$db = new PDO("mysql:host=localhost;dbname=puskesmas", 'root', '');
$query = $db->query("DELETE FROM pengguna WHERE id='$id'");

if($query){
    header("location:admin.php");
}
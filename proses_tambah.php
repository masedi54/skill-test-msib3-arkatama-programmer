<?php
include 'koneksi.php';

$name = $_POST['name'];
$age = $_POST['age'];
$city = $_POST['city'];

mysqli_query($koneksi, "INSERT INTO arkatama_test VALUES (null, '$nama', '$age', '$city')");
header("location:index.php");
?>
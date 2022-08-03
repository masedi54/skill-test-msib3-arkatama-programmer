<?php
include 'koneksi.php';

$ID = mysqli_real_escape_string($koneksi, $_POST['id']);
$NAME = mysqli_real_escape_string($koneksi, $_POST['name']);
$AGE = mysqli_real_escape_string($koneksi, $_POST['age']);
$CITY = mysqli_real_escape_string($koneksi, $_POST['city']);
mysqli_query($koneksi, "UPDATE arkatama_test SET name='$NAME', age='$AGE', city='$CITY' WHERE id='$ID'");
header("location:index.php");

?>
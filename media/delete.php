<?php
include 'conn.php';
$mediaId = $_GET['mediaId'];

$productId = $_GET['productId'];
$delete = "DELETE FROM `word_files` WHERE word_files_Id=$mediaId";
$result = mysqli_query($conn, $delete);
header('location:index.php');

?>
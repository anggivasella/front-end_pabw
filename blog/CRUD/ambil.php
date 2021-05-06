<?php
require_once "koneksi.php";
$id = $_POST['id'];
$sql = "SELECT * FROM blog where id='$id' ";
$stmt = $conn->prepare($sql);
$stmt->setFetchMode(PDO::FETCH_OBJ);
$stmt->execute();
$data = $stmt->fetch();

echo json_encode($data);

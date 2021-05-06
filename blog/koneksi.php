<?php 

try {
    $conn = new PDO("mysql:host=localhost;dbname=blog", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "KONEKSI SUKSES CUY";
} catch (PDOException $ex) {
    echo 'Connection failed: '.$ex->getMessage();
    exit();
}

 ?>
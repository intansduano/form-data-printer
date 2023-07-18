<?php
$servername = "localhost";
$username = "root";
$password = "";
$mydb   = "data";
// Create connection
$conn = new mysqli($servername, $username, $password, $mydb);

// Check connection
if ($conn->connect_error) {
    die("Koneksi Gagal " . $conn->connect_error);
}

$no        = $_POST['no'];
$nama_merk = $_POST['nama_merk'];
$warna     = $_POST['warna'];
$jumlah    = $_POST['jumlah'];

$sql = "INSERT INTO printer VALUES ('$no', '$nama_merk', '$warna', '$jumlah')";

if ($conn->query($sql) === TRUE) {
    //echo "Simpan Data Sukses";
    //echo '<br><a href="index.php">Lihat Data</a>';
    header("location: index.php?data=infobarang");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

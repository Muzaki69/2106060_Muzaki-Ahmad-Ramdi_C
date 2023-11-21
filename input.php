<?php
$db = mysqli_connect("localhost", "root", "", "projek_uts");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nama = $_POST['nama'];
$password = $_POST['password'];
$jenis_lomba = $_POST['jenis_lomba'];
$jam_lomba = $_POST['waktu'];
$tanggal_lomba = $_POST['tanggalLomba'];


$query = "INSERT INTO agustusan VALUES (NUll,'$nama','$password','$jenis_lomba','$jam_lomba','$tanggal_lomba')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>
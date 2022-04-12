<?php
include('koneksi.php');
echo "isi tabel sebelum di insert <br/>";
$hasil=mysqli_query($kon,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
    echo $baris['id']."". 
    $baris['NamaPenulis'];
    echo "<br/>";

}
mysqli_query($kon, "INSERT INTO penulis (NamaPenulis, Alamat, TanggalLahir, TinggiBadan) VALUES ('Donald', 'Jln matramanRaya', '1977-12-23', '175')");
echo "<br/>";
echo "isi tabel sesudah di insert <br/>";
$hasil=mysqli_query($kon, "SELECT * FROM Penulis");
while($baris=mysqli_fetch_array($hasil))
{
    echo $baris['id']."". $baris['NamaPenulis']."".$baris['Alamat']; 
    echo "<br/>";

}
?>
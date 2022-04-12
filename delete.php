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
mysqli_query($kon, "DELETE FROM Penulis where Id='1'");
echo"<br/>";
echo "isi tabel sesudah di hapus <br/>";
$hasil = mysqli_query($kon, "SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
echo $baris['id']."". $baris['NamaPenulis'];
echo "<br/>";
}
?>
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

mysqli_query($kon, "UPDATE penulis set NamaPenulis='Erwandi' Where id=1");
echo "<br/>";
echo "isi tabel sesudah di update <br/>";
$hasil=mysqli_query($kon, "SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil)) 
{
    echo $baris['id']."". $baris['NamaPenulis'];
    echo "<br/>";
}

?>
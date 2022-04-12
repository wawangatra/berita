<?php
include("koneksi.php");
$hasil=mysqli_query($kon,"SELECT * FROM penulis");
while($baris=mysqli_fetch_array($hasil))
{
    echo $baris['id']."". $baris['NamaPenulis'];
echo"<br/>"; 
}
?>
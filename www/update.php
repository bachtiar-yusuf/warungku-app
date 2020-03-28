<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $jumlah=$_POST['jumlah'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `warungku` SET `nama`='$nama',`jumlah`='$jumlah',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
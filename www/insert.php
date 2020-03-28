<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $harga=$_POST['jumlah'];
 $jumlah=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `warungku` (`nama`,`jumlah`,`harga`) VALUES ('$nama','$jumlah','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
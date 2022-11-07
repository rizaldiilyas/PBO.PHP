<?php
  $id = $_GET['ID'];
  $nama = $_GET['Nama'];

  $koneksi = new PDO("mysql:host=localhost;dbname=nama nama", "root", "");
  $koneksi->query("INSERT INTO `daftar nama`(`id`, `nama`) VALUES ('$id','$nama')");
?>
<?php 
include "koneksi.php";

if (isset($_POST['submit'])) {
    // jika sudah, ambil nilai masing-masing field
    $paket=$_POST['paket'];
    $username=$_POST['username'];
    $pilpaket=$_POST['pilpaket'];
    $tgl_brgkt=$_POST['tgl_brgkt'];
    $duduk=$_POST['duduk'];
    // query menyimpan data ke database
    $sql = "INSERT INTO order (paket,username,pilpaket,tgl_brgkt,duduk) VALUES
    ('$paket', '$username', '$pilpaket','$tgl_brgkt','$duduk')";
    // cek apakah proses simpan berhasil
    //if (mysqli_query($koneksi, $sql)) {
      // jika berhasil, redirect ke index.php
      //header('Location:paketjogja_cust.php');
    //} else {
      // jika tidak, tampilkan pesan gagal menyimpan
      //echo '<script language="javascript">
        //      alert ("Maaf, gagal booking");
          //    window.location="home_cust.php";
            //  </script>';
              //exit();
    //}
    var_dump($sql);
    print_r($sql);
  }
?>
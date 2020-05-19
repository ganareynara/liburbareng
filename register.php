<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form pendaftaran

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$jenkel=$_POST["jenkel"];
$tgl_lhr=$_POST["tgl_lhr"];
$alamat=$_POST["alamat"];
$email=$_POST["email"];
$no_tlp=$_POST["no_tlp"];
$jurusan=$_POST["jurusan"];
$angkatan=$_POST["angkatan"];
$username=$_POST["username"];
$password=$_POST["password"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into customer (id,nim,nama,jenkel,tgl_lhr,alamat,email,no_tlp,jurusan,angkatan,username,password,level) values
		('', '$nim','$nama','$jenkel','$tgl_lhr','$alamat','$email','$no_tlp','$jurusan','$angkatan','$username','$password','cust')";

//PERINTAH MENGECEK AGAR TIDAK TERDAPAT USER YANG SAMA
$cek_user=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM customer WHERE username='$_POST[username]'"));
if ($cek_user > 0) {
        echo '<script language="javascript">
              alert ("User Sudah Ada Yang Menggunakan");
              window.location="index.php";
              </script>';
              exit();
}
//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($koneksi,$sql);
  header("location:index.php");
?>
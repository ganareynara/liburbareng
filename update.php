<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jenkel=$_POST['jenkel'];
$tgl_lhr=$_POST['tgl_lhr'];
$alamat=$_POST['alamat'];
$email=$_POST['email'];
$no_tlp=$_POST['no_tlp'];
$jurusan=$_POST['jurusan'];
$angkatan=$_POST['angkatan'];
$username=$_POST['username'];
$password=$_POST['password'];
$level = $_POST['level'];

// update data ke database
mysqli_query($koneksi,"update customer set nim='$nim', nama='$nama', jenkel='$jenkel',
tgl_lhr='$tgl_lhr', alamat='$alamat', email='$email', no_tlp='$no_tlp', jurusan='$jurusan', angkatan='$angkatan',
username='$username', password='$password' where username='$username'");
 
// mengalihkan halaman kembali ke index.php
header("location:data_diri.php");
 
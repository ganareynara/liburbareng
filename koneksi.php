<?php

  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'liburbareng';

  $koneksi = mysqli_connect( $host, $user, $password, $db ) or die( mysqli_error() );

?>
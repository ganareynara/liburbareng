<?php
require 'koneksi.php';
session_start();

if (!isset($_SESSION["username"])) {
	echo "Anda harus login dulu <br><a href='index.php'>Klik disini</a>";
	exit;
    }

$username=$_SESSION["username"];

?>


<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Libur Bareng Yuk!</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css">

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="home_cust.php">home</a></li>
                                            <li><a href="travel_destination_cust.php">Destination</a></li>
                                            <li>Hola! <b><?php echo $_SESSION['username']; ?></b></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="navigation">
                                        <a href="data_diri.php" class="genric-btn info-border circle">Edit Data</a>
                                        <a href="logout.php" class="genric-btn danger-border circle">Log Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <div class="section-top-border">
				<div class="container">
					<div class="col-lg-12">
                        <h3 class="mb-50">Update Data</h3>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * from customer WHERE username='$username' ") or die (mysqli_error($koneksi));
                        $data = mysqli_fetch_array($query);
                        ?>
						<form method="POST" action="update.php">
                            <div class="mt-10">
                                <label for="nim">NIM: </label>
                                <input type="text" name="nim" id="nim" value="<?php echo $data['nim']?>" readonly 
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="nama">Name: </label>
                                <input type="text" name="nama" id="nama" value="<?php echo $data['nama']; ?>" required 
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="jenkel">Gender: </label>
                                <?php $jenkel = $data['jenkel']; ?>
                            <div class="form-select">
                                <select id="jenkel" name="jenkel" required>
                                <option value="" required>Gender</option>
                                <option <?php echo ($jenkel == 'Laki') ? "selected": "" ?> value="Laki" required>Boy</option>
                                <option <?php echo ($jenkel == 'Perempuan') ? "selected": "" ?> value="Perempuan" required>Girl</option>
                                </select>
                            </div>
                            </div>
                            <div class="mt-10">
                                <label for="tgl_lhr">Birthday Date: </label>
                                <input type="date" id="tgl_lhr" name="tgl_lhr" value="<?php echo $data["tgl_lhr"]; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="alamat">Address: </label>
                                <input type="text" id="alamat" name="alamat" value="<?php echo $data['alamat']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="email">Email: </label>
                                <input type="email" name="email" value="<?php echo $data['email']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="no_tlp">Contact: </label>
                                <input type="text" id="no_tlp" name="no_tlp" value="<?php echo $data['no_tlp']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="jurusan">Program Study: </label>
                                <input type="text" name="jurusan"value="<?php echo $data['jurusan']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="angkatan">Year Entry: </label>
                                <input type="text" name="angkatan" value="<?php echo $data['angkatan']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="username">Username: </label>
                                <input type="text" name="username" value="<?php echo $data['username']; ?>" required
                                class="single-input">
                            </div>
                            <div class="mt-10">
                                <label for="password">Password: </label>
                                <input type="password" name="password" placeholder="Password"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
                                class="single-input">
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
    <div>

    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a>
                                    <img src="img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>Jl. Imam Bonjol No.207 <br> Pendrikan Kidul, Kec. Semarang Tengah, Kota Semarang, Jawa Tengah 50131 <br>
                                <a>(024) 3517261</a> <br>
                                <a>ganareynara@gmail.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="travel_destination.php">Pricing</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="index.php"> Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Popular destination
                            </h3>
                            <ul class="links double_links">
                                <li><a href="travel_destination.php">Jogja</a></li>
                                <li><a href="travel_destination.php">Pacitan</a></li>
                                <li><a href="travel_destination.php">Malang</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/1.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/2.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/3.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/4.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/5.png" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="img/instagram/6.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a href="https://instagram.com/ganareynara" target="_blank">Gana Aditya Reynara</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- link that opens popup -->   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
   

    
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>


    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
    </script>
</div>
</body>
</html>
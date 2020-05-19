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
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
?>

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
                                            <li><a class="active" href="index.php">home</a></li>
                                            <li><a href="about.php">About</a></li>
                                            <li><a href="travel_destination.php">Destination</a></l/li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="navigation">
                                        <a data-toggle="modal" data-target="#mydaftar" class="genric-btn info-border circle">Register</a>
                                        <a data-toggle="modal" data-target="#mylogin" class="genric-btn success-border circle">Sign In</a>
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

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_3">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>About Us</h3>
                        <p>go on vacation, so there is a story between us huh!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    
    <div class="about_story">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="story_heading">
                        <h3>Our Story</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 offset-lg-1">
                            <div class="story_info">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <p>Making Startup "Libur Bareng" begins with complaints Students who have mediocre costs, want to feel new experiences, have lots of friends and relationships and prevent stress due to lack of picnics. At this StartUp, students from various campuses can vacation together without the minimum transportation reservations that have been scheduled by Mimin according to their respective campus holidays.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="story_thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6">
                                        <div class="thumb padd_1">
                                            <img src="img/about/1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thumb">
                                            <img src="img/about/2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="counter_wrap">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3  class="counter">378</h3>
                                            <p>Tour has done successfully</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">30</h3>
                                            <p>Yearly tour arrange</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="single_counter text-center">
                                            <h3 class="counter">2263</h3>
                                            <p>Happy Clients</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="travel_variation_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/1.svg" alt="">
                        </div>
                        <h3>Comfortable Journey</h3>
                        <p>Comfortable traveling with new friends or maybe new acquaintances?</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/2.svg" alt="">
                        </div>
                        <h3>Comfortable Hotel</h3>
                        <p>a comfortable hotel as comfortable this feeling to him/her</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_travel text-center">
                        <div class="icon">
                            <img src="img/svg_icon/3.svg" alt="">
                        </div>
                        <h3>New Friends</h3>
                        <p>build relationships with friends</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- testimonial_area  -->
    <div class="testimonial_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testmonial_active owl-carousel">
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author.png" alt="">
                                        </div>
                                        <p>"Don't panic, let's go picnic!"</p>
                                        <div class="testmonial_author">
                                            <h3>- Gana Aditya</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author1.png" alt="">
                                        </div>
                                        <p>"Don't worry, picnic make you enjoyyy!"</p>
                                        <div class="testmonial_author">
                                            <h3>- Ariefditya</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_carousel">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="single_testmonial text-center">
                                        <div class="author_thumb">
                                            <img src="img/testmonial/author3.png" alt="">
                                        </div>
                                        <p>"Life must go PICNIC!"</p>
                                        <div class="testmonial_author">
                                            <h3>- Moch Saiful</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /testimonial_area  -->

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
                                <li><a href="index.php"> text</a></li>
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


  <!-- Modal -->
  <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="serch_form">
            <input type="text" placeholder="Search" >
            <button type="submit">search</button>
        </div>
      </div>
    </div>
  </div>
    <!-- link that opens popup -->
<!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
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
   

    
    <!--text js-->
    <script src="js/text.js"></script>
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
<!-- Modal daftar -->
<div id="mydaftar" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Sign In</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form method="POST" action="register.php">
        <div class="mt-10">
            <label for="nim">NIM: </label>
            <input type="text" name="nim" id="nim" placeholder="NIM" 
            onfocus="this.placeholder = ''" onblur="this.placeholder = 'NIM'" required 
            class="single-input">
        </div>
	    <div class="mt-10">
            <label for="nama">Name: </label>
            <input type="text" name="nama" id="nama" placeholder="Fullname" 
            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Fullname'" required 
            class="single-input">
        </div>
        <div class="mt-10">
            <label for="jenkel">Gender: </label>
		  <div class="form-select">
		    <select id="jenkel" name="jenkel">
			<option value="">Gender</option>
			<option value="Laki">Boy</option>
			<option value="Perempuan">Girl</option>
			</select>
		  </div>
		</div>
		<div class="mt-10">
            <label for="tgl_lhr">Birthday Date: </label>
		    <input type="date" id="tgl_lhr" name="tgl_lhr" placeholder="Date"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date'" required
			class="single-input">
		</div>
		<div class="mt-10">
            <label for="alamat">Address: </label>
			<input type="text" id="alamat" name="alamat" placeholder="Address"
			onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required
			class="single-input">
		</div>
		<div class="mt-10">
            <label for="email">Email: </label>
		    <input type="email" name="email" placeholder="Email address"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
			class="single-input">
        </div>
        <div class="mt-10">
            <label for="no_tlp">text: </label>
			<input type="text" id="no_tlp" name="no_tlp" placeholder="Contact"
			onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact'" required
			class="single-input">
		</div>
        <div class="mt-10">
            <label for="jurusan">Program Study: </label>
		    <input type="text" name="jurusan" placeholder="Program Study"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Program Study'" required
			class="single-input">
        </div>
        <div class="mt-10">
            <label for="angkatan">Year Entry: </label>
		    <input type="text" name="angkatan" placeholder="Year Entry ex. 2017"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Year Entry ex. 2017'" required
			class="single-input">
        </div>
        <div class="mt-10">
            <label for="username">Username: </label>
		    <input type="text" name="username" placeholder="Username"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required
			class="single-input">
        </div>
        <div class="mt-10">
            <label for="password">Password: </label>
		    <input type="password" name="password" placeholder="Password"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
			class="single-input">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Register</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </form>
      </div>
      
    </div>
  </div>
</div>
<!-- end modal daftar -->

<!-- Modal login -->
<div id="mylogin" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Log In</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      <form method="POST" action="login.php">
        <div class="mt-10">
            <label for="username">Username: </label>
		    <input type="text" name="username" placeholder="Username"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required
			class="single-input">
        </div>
        <div class="mt-10">
            <label for="password">Password: </label>
		    <input type="password" name="password" placeholder="Password"
		    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required
			class="single-input">
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Log In</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
  </form>
      </div>
      
    </div>
  </div>
</div>
<!-- end modal daftar -->

</body>

</html>
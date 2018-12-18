<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Tugas ENEWS</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url() ?>/assets/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/assets/style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                            <!-- Logo -->
<h1 style="color:white;"><i>E-News<i></h1>
                            <?php /*
                            <div class="logo">
                                <a href="index.html"><img src="<?php echo base_url() ?>/assets/img/core-img/logdo.png" alt="dawda"></a>
                            </div>*/ ?>

                            <!-- Login Search Area -->
                            <div class="login-search-area d-flex align-items-center">
                                <!-- Login -->
<?php if($this->session->userdata('akses')=='2'){ ?>

 <div class="login d-flex">
<a href="<?= base_url(); ?>index.php/home/logout">Logout</a>
<a href="<?= base_url(); ?>index.php/home/v_profil">Profil</a>
</div>
            
        <?php }  else { ?>

                                <div class="login d-flex">
                                    <a href="<?= base_url(); ?>index.php/home/login">Login</a>
                                    <a href="<?= base_url(); ?>index.php/home/v_register">Register</a>
                                </div>
                                
<?php } ?>

                                <!-- Search Form -->
                                <div class="search-form">
                                    <form action="#" method="post">
                                        <input type="search" name="search" class="form-control" placeholder="Search">
                                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="newspaper-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="newspaperNav">

                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="<?php echo base_url() ?>/assets/img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?= base_url()?>index.php/home/homee">Home</a></li>











                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="catagories-post.html">Catagories</a></li>
                                            <li><a href="single-post.html">Single Articles</a></li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="#">Dropdown</a>
                                                <ul class="dropdown">
                                                    <li><a href="index.html">Home</a></li>
                                                    <li><a href="catagories-post.html">Catagories</a></li>
                                                    <li><a href="single-post.html">Single Articles</a></li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="contact.html">Contact</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li class="title">Catagories</li>
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="catagories-post.html">Catagories</a></li>
                                                <li><a href="single-post.html">Single Articles</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="<?php echo base_url() ?>/assets/img/bg-img/23.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Travel</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Pellentesque mattis arcu massa, nec fringilla turpis eleifend id.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Single Featured Post -->
                                                <div class="single-blog-post small-featured-post d-flex">
                                                    <div class="post-thumb">
                                                        <a href="#"><img src="<?php echo base_url() ?>/assets/img/bg-img/24.jpg" alt=""></a>
                                                    </div>
                                                    <div class="post-data">
                                                        <a href="#" class="post-catagory">Politics</a>
                                                        <div class="post-meta">
                                                            <a href="#" class="post-title">
                                                                <h6>Augue semper congue sit amet ac sapien. Fusce consequat.</h6>
                                                            </a>
                                                            <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="<?= base_url()?>index.php/home/politik">Politik</a></li>
                                    <li><a href="<?= base_url()?>index.php/home/beritaterkini">Berita Terkini </a></li>
                                    <li><a href="<?= base_url()?>index.php/home/bisnis">Bisnis</a></li>
                                    <li><a href="<?= base_url()?>index.php/home/teknologi">Teknologi</a></li>
                                    <li><a href="<?= base_url()?>index.php/home/kesehatan">Kesehatan</a></li>
                                    <li><a href="<?= base_url()?>index.php/home/travel">Travel</a></li>
                                    <li><a href="<?= base_url()?>index.php/home/olahraga">Olah Raga</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-areyguga" style="margin:50px;">
        <div class="container">




  <!-- ##### fsesfsefs Area End ##### -->






    <!-- ##### Hero Area Start ##### -->


        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">

                        <!--Halaman Isi Start -->
<?php $this->load->view($konten); ?>


                          <!-- Halaman Isi End -->
             </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                   <div class="kidri" style="  background-color: #d0d5d8;
  border-radius:5px;
  padding-top:1px;
  height:50px;color: #ffffff;
  width: 100%;
"><center><p><h4>Baru Baru ini</h4></p></center></div>
                    <!-- Single Featured Post -->


 <?php  foreach($hasilkanan as $r) {?>
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img src="<?php echo base_url() ?>/assets/img/bg-img/19.jpg" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory"><?php echo  $r['nama']?></a>
                            <div class="post-meta">
                                <a href="#" class="post-title">
                                    <h6><?php echo  $r['deskripsi']?></h6>
                                </a>
                                <p class="post-date"><span><?php echo  $r['tanggal']?></span> </p>
                            </div>
                        </div>
                    </div>

                   
<?php } ?>
                    <!-- Single Featured Post -->
                



 












                    </div>
                </div>
            </div>
        </div>
    </div><br>


    <!-- #####    isiiiiiiiiiiiiiiiiiii Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
 
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
   
    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->

    <!-- ##### Footer Add Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget-area mt-80">
                            <!-- Footer Logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="<?php echo base_url() ?>/assets/img/core-img/logo.png" alt=""></a>
                            </div>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="mailto:contact@youremail.com">contact@youremail.com</a></li>
                                <li><a href="tel:+4352782883884">+43 5278 2883 884</a></li>
                                <li><a href="http://yoursitename.com">www.yoursitename.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Politics</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Markets</a></li>
                                <li><a href="#">Tech</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">Featured</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Football</a></li>
                                <li><a href="#">Golf</a></li>
                                <li><a href="#">Tennis</a></li>
                                <li><a href="#">Motorsport</a></li>
                                <li><a href="#">Horseracing</a></li>
                                <li><a href="#">Equestrian</a></li>
                                <li><a href="#">Sailing</a></li>
                                <li><a href="#">Skiing</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">FAQ</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Aviation</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Traveller</a></li>
                                <li><a href="#">Destinations</a></li>
                                <li><a href="#">Features</a></li>
                                <li><a href="#">Food/Drink</a></li>
                                <li><a href="#">Hotels</a></li>
                                <li><a href="#">Partner Hotels</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-4 col-lg-2">
                        <div class="footer-widget-area mt-80">
                            <!-- Title -->
                            <h4 class="widget-title">+More</h4>
                            <!-- List -->
                            <ul class="list">
                                <li><a href="#">Fashion</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Architecture</a></li>
                                <li><a href="#">Arts</a></li>
                                <li><a href="#">Autos</a></li>
                                <li><a href="#">Luxury</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><!-- Link back to alimdesain can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://alimdesain.com" target="_blank">alimdesain</a>
<!-- Link back to alimdesain can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url() ?>/assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/<?php echo base_url() ?>/assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>/assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url() ?>/assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url() ?>/assets/js/active.js"></script>
</body>

</html>

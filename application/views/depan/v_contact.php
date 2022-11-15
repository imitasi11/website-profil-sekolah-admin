<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>CONTACT ASH-SHOLAWAAT</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
</head>

<body>
   <style type="text/css">
    .nav-menu2 .navbar-light .navbar-nav .nav-link:hover {
    color: #e3b30d;
    border-bottom: 3px solid #e3b30d;

}
.jurusan-box{
    border-radius: 15px 15px 15px 70px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;min-width:380px;width: 380px;height: 250px;background-color: #f2f2f2; margin:auto; margin-top:30px; 
}

</style>
    <!--============================= HEADER =============================-->
    <div class="header-topbar" style="background: #4A6A34;">
        <div class="container" style=" width: 100%;">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <span class="icon-phone"></span>+62 858 6572 2792
                        </div>
                        <div class="header-top_list">
                            <span class="icon-envelope-open"></span>ashsholawaatsragen@gmail.com
                        </div>
                        <div class="header-top_list">
                            <span class="icon-location-pin"></span>Sragen, Jawa Tengah.
                        </div>
                    </div>
                    <div class="header-top_login2" style="">
                        <a href="<?php echo site_url('Contact');?>">HUBUNGI KAMI</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                        <a href="<?php echo site_url('Contact');?>">HUBUNGI KAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2" style="width: 100%;" >
            <div class="row">
                <div class="col-md-12">
                    <nav  class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded" >
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span  class="icon-menu"></span>
                        </button>
                        <a style="padding-left: 5px;" href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="75%;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown" style="float: right;">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>" style="color: #e3b30d;
    border-bottom: 3px solid #e3b30d;"><b>HOME</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>" ><b>PROFIL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswabaru');?>"><b>PSB</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran');?>"><b>PENDAFTARAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>" ><b>ARTIKEL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>"><b>PENGUMUMAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>" ><b>AGENDA</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('download');?>"><b>DOWNLOAD</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>"><b>GALERI</b></a>
                                </li>
                                
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div><!--//END HEADER -->
    <section>
</section>
<!--//END HEADER -->
<!--//END HEADER -->
<section class="contact" style="background:     #d0d0d0;" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="contact-title">
                    <h2>Hubungi Kami</h2>
                </div>
            </div>
        </div>
        <div class="row" >
            <div class="col-md-12">
                <div class="contact-form" style="background: #4A6A34;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 contact-option">
                            <div class="contact-option_rsp">
                                <h3>Tinggalkan Pesan</h3>
                                <form action="<?php echo site_url('contact/kirim_pesan');?>" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Name" name="xnama" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="xemail" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone" name="xphone" required>
                                    </div>
                                    <!-- // end .form-group -->
                                    <div class="form-group">
                                        <textarea placeholder="Message" class="form-control" name="xmessage" required rows="5"></textarea>
                                    </div>
                                    <div class="form-group" align="right">
                                        <button type="submit" class="btn btn-default btn-submit" align="right">SUBMIT</button>
                                    
                                    </div>
                                    <!-- // end .form-group -->
                                    <div><?php echo $this->session->flashdata('msg');?></div>
                                    <!-- // end #js-contact-result -->
                                </form>
                            </div>
                        </div>
                         <div class="col-xs-12 col-sm-12 col-md-6">
                            <div class="contact-address">
                                <div class="contact-details">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                <h6>Alamat</h6>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.325794671334!2d110.98754938895662!3d-7.463472288537079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1b14b8c173c7%3A0xdaf60a16323c49dd!2sAsh-Sholawaat%20Islamic%20Boarding%20School%20Sragen!5e0!3m2!1sid!2sid!4v1647690758635!5m2!1sid!2sid" width="100%" height="380" style="border:0;" allowfullscreen="yes" loading="lazy"></iframe>
                                    
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                        <h6>Email</h6>
                                        <p>ashsholawaatsragen@gmail.com
                                        </p>
                                    </div>
                                    <br>
                                    <div class="contact-details">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <h6>Phone</h6>
                                        <p>+62 858 6572 2792</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="contact-center">OR</p>
                </div>
            </div>
        </div>
    </section>
    <!--//END  ABOUT IMAGE -->
    <!--============================= FOOTER =============================-->
     <?php
    $this->load->view('depan/Crumbs/v_footer');
  ?>
            <!--//END FOOTER -->
            <!-- jQuery, Bootstrap JS. -->
            <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
            <!-- Subscribe / Contact-->
            <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
            <script src="<?php echo base_url().'theme/js/contact.js'?>"></script>
            <!-- Script JS -->
            <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
        </body>

        </html>









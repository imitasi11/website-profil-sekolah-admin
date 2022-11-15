<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SELAMAT DATANG DI ASH-SHOLAWAAT</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
    <style type="text/css">
      body{
        overflow-x: hidden;
      }
        .marg{
            margin-top: 21px;
            padding-left: 15%;padding-right: 15%;
        }
        .btn-default {
    text-transform: uppercase;
    color: #fff;
    background: none;
    border: 3px solid #FACA08;
    font-size: 18px;
    padding: 16px 36px;
    border-radius: 0;
}
.btn-default:hover {
    color: #fff;
    background: #e3b30d;
    border: 3px solid #e3b30d;
}
.jurusan-box{
    border-radius: 15px 15px 15px 70px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;min-width:380px;width: 380px;height: 250px;background-color: #f2f2f2; margin:auto; margin-top:30px; 
}
.sle a{
  color: #FACA08;
}
.sle a:hover{
  color: black;
}
.d-block{
  width: 100%;
  max-height: 200px;
    top: 0;
    bottom: 0;
    margin: auto;
}
@media screen and (max-width : 500px){
  .d-block{
  width: 100%;
  max-height: 100px;
    top: 0;
    bottom: 0;
    margin: auto;
}
}
.partimg{
    
  width: auto;
  height: auto;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
}
/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 12px 16px;
  color: white;
}
.slebew{
  background-color: #FACA08;
    border-color: #FACA08;font-size: 26px;
}
.slebew:hover{
  background-color: #4A6A34;
    border-color: #4A6A34;font-size: 26px;
}
    </style>

</head>

<body>
    <!--============================= HEADER =============================-->
<style type="text/css">
    .nav-menu2 .navbar-light .navbar-nav .nav-link:hover {
    color: #e3b30d;
    border-bottom: 3px solid #e3b30d;
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
                                    <a class="nav-link active" href="<?php echo site_url('');?>" style="color: #e3b30d;border-bottom: 3px solid #e3b30d;"><b>HOME</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>"><b>PROFIL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('siswabaru');?>"><b>PSB</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pendaftaran');?>"><b>PENDAFTARAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>"><b>ARTIKEL</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>"><b>PENGUMUMAN</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('agenda');?>"><b>AGENDA</b></a>
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
      </div>
<section>
    <style type="text/css">
    .carousel-control-prev-icon {
 background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}
.carousel-control-next-icon {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
}
  </style>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-1.png'?>" alt="First slide" style="opacity: 10;min-height:600px;max-height: 800px;">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <br>
                            <br>
                            <h1>Pendaftaran Santri Baru</h1>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('pendaftaran');?>" class="btn btn-default">Segera Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-2.png'?>" alt="Second slide" style="opacity: 10;min-height:600px;max-height: 800px;">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Kompetensi Lulusan</h1>
                            <h4>Berakhlakul Karimah, Mandiri, Kreatif dan Inovatif <br>Siap Kerja, siap menjadi pengusaha tangguh, siap berkarya,dan siap terjun dimasyarakat<br>Mampu Berinteraksi dan Berkomunikasi Efektif dengan masyarakat
</h4>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-3.png'?>" alt="Third slide" style="opacity: 10;min-height:600px;max-height: 800px;">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Visi dan Misi</h1>
                            <h4>Menjadi sekolah berbasis Entrepreneur yang Unggul dalam Ilmu, Terampil dalam Amal, Mulia dalam Akhlak, serta Berdaya Saing di Era Global.<br>Menyelenggarakan kegiatan pendidikan dan pelatihan yang bermutu, efektif dan efisien dalam pengembangan kegiatan Entrepreneurship.</h4>
                            
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->

<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container" style="">
        
        <div class="row">
            
            <div class="col-lg-6">
                <h2>Agenda</h2>
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap"  style="background: #4A6A34;">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a style="color: #4A6A34;" href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <h2>Pengumuman</h2>
                <div class="event-img2">
                <?php foreach ($pengumuman->result() as $row) :?>
                <div class="row">
                    
                    <div class="col-sm-12"> <h3><a style="color: #4A6A34;" href="<?php echo site_url('pengumuman');?>"><?php echo $row->pengumuman_judul;?></a></h3>
                      <span><?php echo $row->tanggal;?></span>
                      <p><?php echo limit_words($row->pengumuman_deskripsi,10).'...';?></p>

                    </div><!-- // end .col-sm-7 -->
                </div><!-- // end .row -->
                <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="event" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 20px 90px 4px;">
  <div class="container" style="" align="center">
      <div class="row" align="center" style="width: 100%;text-align: center;" >
        <div class="col-md-12" align="center">
          
                <h2>Jenjang Pendidikan</h2>
        </div>
      </div>
    </div>
    <div class="container" style="" align="center">
      
        <div class="row">
          <div class="jurusan-box" style="position: relative;">
            <div class="row" style="padding-left: 50px;margin-top: 21px;padding-right: 50px;">
              <div class="row" style="margin-bottom: 13px;height: 100px;">
              <img src="<?php echo base_url().'theme/images/smk-lg.jpeg'?>" style="width: 80px;height: 80px;">
               <div class="row" style="margin-left: 9px;margin-top: 17px;">
              <h4 style="margin-left: 13px;"><b>SMK ENTERPRENEUR <br>ASH-SHOLAWAAT<br> SRAGEN</b></h4>
            </div>
              </div>
              
              <div class="row">
              <p align="left">Untuk Info lebih lengkap terkait SMK Enterpreneure Ash-Sholawaat dapat di lihat di sini</p>
              </div>
              <div class="row sle" style="position: absolute;  bottom: 0;">
              <p style="margin-left: 190px;" ><a href="<?php echo site_url('pendaftaran');?>">Selengkapnya <i class='fa fa-arrow-right'></i></a></p>
              </div>
            </div>
          </div>
          <div class="jurusan-box" style="position: relative;">
            <div class="row" style="padding-left: 50px;margin-top: 21px;padding-right: 50px;">
              <div class="row"style="margin-bottom: 13px;height: 100px;">
              <img src="<?php echo base_url().'theme/images/smp-lg.jpeg'?>" style="width: 80px;height: 80px;">
              <div class="row" style="margin-left: 9px;margin-top: 17px;">
                 <h4 ><b>SMP ASH-SHOLAWAAT<br> SRAGEN</b></h4>
              </div>
              </div>
              
              <div class="row">
              <p align="left">Untuk Info lebih lengkap terkait<br> SMP Ash-Sholawaat dapat di lihat di sini</p>
              </div>
              <div class="row sle" style="position: absolute;  bottom: 0;">
              <p style="margin-left: 190px;" ><a href="<?php echo site_url('soon');?>">Selengkapnya <i class='fa fa-arrow-right'></i></a></p>
              </div>
            </div>
          </div>
        </div>
        
    </div>
</section>

<!--//END EVENTS -->
<section class="our_courses" style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
    <div class="container">
        <div class="row" align="center"> 
            <div lass="col-md-12" style="text-align:center;">
                <h2>Mengapa Memilih Ash-Sholawaat IBS Sragen??</h2>
                <div class="row" style="display: flex;
  justify-content: center;
  align-items: center;" align="center">
                    <H2><a href="<?php echo site_url('pendaftaran');?>" align="center" style="" class=" btn btn-primary slebew" >Segera Daftar Sekarang</a></H2>
                </div><!-- // end .col-sm-7 -->
                <div class="row">
                     <p>
                         Ash-Sholawaat IBS Sragen merupakan sekolah berbasis pesantren yang fokus pada program Entrepreneur Sehingga lulusan sekolah diharapkan mampu menjadi GENERASI Siap Berkerja Mandiri, dengan keunggulan sebagai berikut : 
                    </p>
                
                </div><!-- // end .row -->
                 <div class="row">
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt1.png'?>" style="width: 100%;padding-top: 10%;" >
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt2.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt3.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                
                </div><!-- // end .row -->
                <div class="row">
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt4.png'?>" style="width: 100%;padding-top: 10%;" >
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt5.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt6.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                
                </div><!-- // end .row -->
                <div class="row">
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt7.png'?>" style="width: 100%;padding-top: 10%;" >
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt8.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                     <div class="col-sm-4">
                        <img src="<?php echo base_url().'theme/images/gbrfslt9.png'?>" style="width: 100%;padding-top: 10%;">
                     </div>
                
                </div><!-- // end .row -->
                </div>
            </div>
    </div>
</section>
<section class="clearfix about about-style2" style="box-shadow: rgba(0, 0, 0, 0.56) 0px 22px 90px 4px;" >
    <div class="container">
        <div class="row" align="center">
            <div lass="col-md-12" style="text-align:center;"  align="center">
                <h2 style="text-align:center;"  align="center" >PARTNERSHIP</h2><br><br>
               
                <div class="row" style="height: 400px;">
                     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" style="padding: 0 100px;padding-left: 140px;">
    <div class="carousel-item active">
      <div class="row" >
                    <div class="col-sm-4 partimg">
                      <a href="http://bitecndayupark.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBITEC.png'?>"  >
                      </a>
                     </div>
                     <div class="col-sm-4 partimg">
                     <a href="http://www.ndayupark.com/new/index.php">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGONDAYUPARK.png'?>">
                        </a>
                     </div>
                     <div class="col-sm-4 partimg">
                      <a href="https://www.rsiamalsehat.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGORSIAMALSEHAT.png'?>">
                        </a>
                     </div>
                      <div class="col-sm-4 partimg">
                        <a href="https://smkbintar.sch.id/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBINATARUNA.png'?>">
                        </a>
                     </div>
                     
                </div><!-- // end .row -->
    </div>
    <div class="carousel-item">
      <div class="row" >
                     <div class="col-sm-4 partimg">
                      <a href="http://bitecndayupark.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBITEC.png'?>"  >
                      </a>
                     </div>
                     <div class="col-sm-4 partimg">
                     <a href="http://www.ndayupark.com/new/index.php">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGONDAYUPARK.png'?>">
                        </a>
                     </div>
                     <div class="col-sm-4 partimg">
                      <a href="https://www.rsiamalsehat.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGORSIAMALSEHAT.png'?>">
                        </a>
                     </div>
                      <div class="col-sm-4 partimg">
                        <a href="https://smkbintar.sch.id/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBINATARUNA.png'?>">
                        </a>
                     </div>
                </div><!-- // end .row -->
    </div>
    <div class="carousel-item">
      <div class="row" >
                    <div class="col-sm-4 partimg">
                      <a href="http://bitecndayupark.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBITEC.png'?>"  >
                      </a>
                     </div>
                     <div class="col-sm-4 partimg">
                     <a href="http://www.ndayupark.com/new/index.php">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGONDAYUPARK.png'?>">
                        </a>
                     </div>
                     <div class="col-sm-4 partimg">
                      <a href="https://www.rsiamalsehat.com/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGORSIAMALSEHAT.png'?>">
                        </a>
                     </div>
                      <div class="col-sm-4 partimg">
                        <a href="https://smkbintar.sch.id/">
                        <img class="d-block" src="<?php echo base_url().'theme/images/LOGOBINATARUNA.png'?>">
                        </a>
                     </div>
                     
                </div><!-- // end .row -->
    </div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="color: black;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                </div><!-- // end .row -->
                </div>
        </div>
    </div>
</section>

<!--============================= OUR COURSES =============================-->
<section class="our_courses"  style="box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;">
    <div class="container" style="width: 100%;">
        <div class="row">
            <div class="col-md-12" style="text-align:center;">
            </div>
        </div>
        <div class="row marg" align="center">
          <div class="col-md-6">
          <iframe style="width: 90%; height: 300px"  allowfullscreen="allowfullscreen"
          mozallowfullscreen="mozallowfullscreen" 
          msallowfullscreen="msallowfullscreen" 
          oallowfullscreen="oallowfullscreen" 
          webkitallowfullscreen="webkitallowfullscreen"
          src="https://www.youtube.com/embed/fDG8ES-XiTg">
          </iframe>
          </div>
          <div class="col-md-6" align="justify"><p>RS ISLAM AMAL SEHAT SRAGEN<br>
          Salah satu pelayanan di bidang kesehatan, Pondok Pesantren Ash-Sholawaat Sragen memiliki RSI Amal Sehat Sragen yang selalu siap memberikan pelayanan kesehatan yang Islami dan profesional mengikuti kemajuan tehnologi dan pengetahuan modern 24 jam Non Stop kepada para santri.</p></div>
        </div>
         <div class="row marg" align="center">
           <div class="col-md-6">
            <iframe style="width: 90%; height: 300px"  allowfullscreen="allowfullscree"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen"
            src="https://www.youtube.com/embed/kmtdQRD_XIA">
            </iframe>
          </div>
             <div class="col-md-6" align="justify"><p>BITEC<br> 
          Biofarming Training & Education Center merupakan Program Agrowisata Pondok Pesantren Ash-Sholawaat Sragen yang memberikan layanan pengembangan kapasitas sumberdaya manusia kepada para santri dalam bentuk pendidikan dan pelatihan, magang, konsultasi dan pendampingan bisnis biofarming dibidang Pertanian (Budidaya tanaman hortikultura sistem hidroponik), Peternakan (Peternakan domba menggunakan complete feed) dan Perikanan (Budidaya ikan gurame, ikan nila dan ikan lele).</p></div>
        </div>
         <div class="row marg" align="center">
           <div class="col-md-6">
             <iframe style="width: 90%; height: 300px"  allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen"
            src="https://www.youtube.com/embed/Is_euVNrNEA">
            </iframe>
          </div>
             <div class="col-md-6" align="justify"><p>NDAYU PARK EDUCATION<br>
          Taman Edukasi Ndayu Park juga merupakan Program Agrowisata Pondok Pesantren Ash-Sholawaat Sragen sebagai tempat hiburan dan olahraga bagi para santri dan diperuntukkan untuk msayarakat umum untuk tempat berlibur dan bermain anak-anak serta wisata keluarga. Fasilitas yang terdapat di Taman Edukasi Ndayu Park meliputi: Villa dan Cottage, Gedung Pertemuan, VIP Room dan Pendopo, Resto dan Rumah Roti, Water Boom dan Wahana Air, Outbond, Mini Zoo, dan taman bermain anak-anak lainnya.</p></div>
             </div>
             <div class="row">
        <div class="row marg" align="center">
           <div class="col-md-6">
             <iframe style="width: 90%; height: 300px"  allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen"
            src="https://www.youtube.com/embed/08Diz8qcPZM">
            </iframe>
          </div>
             <div class="col-md-6" align="justify"><p>SMK BINA TARUNA<br>
          Salah satu lembaga pendidikan yang dikelola oleh Ndayu Group selain SMK Entrepreneur Ash-Sholawaat Sragen adalah SMK Bina Taruna Masaran yang mempunyai 3 Jurusan Yaitu : Teknik Las, Teknik Otomotif Dan Teknik Komputer dan Jaringan. Teknik Las Meliputi Konsen trasi di bidang (Las Tigmig, Las Gas Astelin, Las Listrik Busur Manual, Mesin Produktif dan konstruksi Baja). Jurusan Teknik Otomotif Meliputi Konsentrasi( Service, Tune-UP, Chasis dan Transmisi, Bodi Otomotif dan kelistrikan). Teknik Komputer Jaringan meliputi(Perakitan komputer, Desain Grafis, Pemrograman Web, Jaringan Dan Internet).</p></div>
             </div>
           </div>
             <div class="row">
<div class="container" align="center" style="margin-top: 90px;">
<h2 style="text-align:center">Slideshow Gallery</h2>
<?php
$count=1;
 foreach ($all_galeri->result() as $row) : ?>
  <?php if($row->galeri_album_id == 7){?>
    <div class="mySlides">
             <img style="width:80%" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" class="all img-fluid" alt="#" />
  </div>
           <?php $count=$count+1; }?>
          <?php endforeach;?>
  <div class="caption-container">
    <p id="caption"></p>
  </div>


    <?php
$count=1;
 foreach ($all_galeri->result() as $row) : ?>
  <?php if($row->galeri_album_id == 7){ ?>
     <div class="column">
      <img class="demo cursor" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" style="width:100%" onclick="currentSlide(<?php echo $count; ?>)" alt="<?php echo $row->galeri_judul; ?>">
    </div>

           <?php $count=$count+1; }?>
          <?php endforeach;?>

</div>
 </div>
</div>
</section>
<!--//END OUR COURSES -->
<?php
    $this->load->view('depan/Crumbs/v_footer');
  ?>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>

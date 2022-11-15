<!--============================= FOOTER =============================-->
<!-- Main CSS -->
    <style type="text/css">
        .sle a{
  color: #FACA08;
}
.sle a:hover{
  color: black;
}</style>
<footer style="background: #4A6A34;">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white.png'?>" style="width: 50%;" class="img-fluid" alt="footer_logo">
                    </a>
                    <p><?php echo date('Y');?> © copyright by ASH SHOLAWAAT</a>. <br>All rights reserved.</p>
                    </div>
                    <div class="row sle">
              <p style="margin-left: 20px;"><a href="<?php echo base_url().'./admin/login'?>">Log in <i class="fa fa-arrow-right"></i></a></p>
              </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3> 
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">Tentang Kami</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Pendaftaran</a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="sitemap">
                      <h3>Akademik</h3>
                      <ul>
                          <li><a href="<?php echo site_url('pengumuman');?>">Pengumuman</a></li>
                          <li><a href="<?php echo site_url('agenda');?>">Agenda</a></li>
                          <li><a href="<?php echo site_url('download');?>">Download</a></li>
                      </ul>
                  </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat: </span><a href="https://goo.gl/maps/BfS26Tud1ML8gGB18">Dayu RT 29 RW 08, Jurangjero, Karang malang, Sragen</a></p>
                        <p>ashsholawaatsragen@gmail.com
                            <br> Whatsapp : +62 858 6572 2792</p>
                            <ul class="footer-social-icons">
                                <li><a href="https://www.facebook.com/profile.php?id=100074160474055"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCFjEPPWwGXteHeL2RFaBpvw"><i class="fa fa-youtube fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/ash_sholawaatsragen/"><i class="fa fa-instagram fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--//END FOOTER -->
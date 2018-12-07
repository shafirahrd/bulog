<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body class="single-page about-page">
	@include('layouts.header')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Kontak</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h1>Tetap Terhubung dengan Kami</h1><br/>

                        <h5>Ingin Bergabung? Segera email ke :</h5>
                        <bold><h5 style="color: orangered">pemasaran.bulogjatim@gmail.com</h5></bold>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            
                        </ul><br/>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>031-8292775</span></li>
                            <li><i class="fa fa-phone"></i><span>031-8292548</span></li>
                            <li><i class="fa fa-envelope"></i><span>pemasaran.bulogjatim@gmail.com</span></li>
                          <li><i class="fa fa-map-marker"></i><span>Jendral Ahmad Yani, No. 146 - 148, Gayungan, Kota SBY, Jawa Timur 60235</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">
                    <form class="contact-form">
                        <input type="text" placeholder="Nama">
                        <input type="email" placeholder="Email">
                        <textarea rows="15" cols="6" placeholder="Pesan"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="Hubungi Kami">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->

                <div class="col-12">
                  <div class="contact-gmap"><br><br><br>
                      <br/>
                      <center><h2 style="color:orangered">Lokasi Kami</h2></center>
                      <br/>
                       <center><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1bcAvtOeB5wEDlKiBmIiuDwFjG7H1towI" width="640" height="480"></iframe></center>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .container -->
    </div>

    @extends('layouts.footer')

</body>
</html>
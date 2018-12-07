
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
                    <h1>Tentang Kami</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="welcome-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-1 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Visi & Misi Perusahaan<br></h2>
                            <h3> Visi</h3>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <h5>"MENJADI PERUSAHAAN PANGAN YANG UNGGUL DAN TERPERCAYA DALAM MEWUJUDKAN KEDAULATAN PANGAN" </h5>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <!--<a href="#" class="btn gradient-bg mr-2">Read More</a>-->
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 order-2 order-lg-2">
                    <h3>Misi</h3><br>
                    <h6> 1. Menjalankan usaha logistik pangan pokok dengan mengutamakan layanan kepada masyarakat.</h6><br>
                    <h6> 2. Melaksanakan praktik manajemen unggul dengan dukungan sumber daya manusia yang profesional, teknologi terdepan, dan sistem yang terintegrasi.</h6><br>
                    <h6> 3. Menerapkan prinsip tata kelola perusahaan yang baik serta sennatiasa melakukan perbaikan yang berkelanjutan.</h6><br>
                    <h6> 4. Menjamin ketersediaan, keterjangkauan, dan stabilitas komoditas pangan pokok. </h6>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-icon-boxes -->

    <div class="about-testimonial">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-5"><br><br><br>
                    <div class="testimonial-cont">
                        <div class="entry-content">
                            <p>NILAI-NILAI PERUSAHAAN</p>
                        </div>

                        
                    </div>
                </div>

                <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
                    
                  <img src=images/22.jpg width="550" height="552">

                        
              </div>
          </div>
            </div>
        </div>
    </div>

    <div class="help-us">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                    <h2>BULOG Divre Jawa Timur</h2>

                    <a class="btn orange-border" href="#">Tentang Kami</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

@extends('layouts.footer')
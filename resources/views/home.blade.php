<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body>
    @include('layouts.header')

<div class="swiper-container hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('images/hero-bg3.jpg') }}" >

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1>Pemasaran <br>
                                    BULOG <br></h1>
                                    <h2> Jawa Timur</h2>
                                    
                                </header>

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    
                                    <a href="{{ url('about') }}" class="btn orange-border">Tentang Kami</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('images/home-bg3.jpg') }}"  >

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1></h1>
                                    <h4>Standarisasi Mutu</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Untuk Kualitas Yang Selalu Terjaga</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    
                                    <a href="{{ url('about') }}" class="btn orange-border">Tentang Kami</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->

            <div class="swiper-slide hero-content-wrap">
                <img src="{{ asset('images/home-bg4.jpg') }}" alt="">

                <div class="hero-content-overlay position-absolute w-100 h-100">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
                                <header class="entry-header">
                                    <h1></h1>
                                    <h4>Pergudangan BULOG</h4>
                                </header><!-- .entry-header -->

                                <div class="entry-content mt-4">
                                    <p>Kami Siap Memberi yang Terbaik</p>
                                </div><!-- .entry-content -->

                                <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                                    
                                    <a href="{{ url('about') }}" class="btn orange-border">Tentang Kami</a>
                                </footer><!-- .entry-footer -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- .hero-content-overlay -->
            </div><!-- .hero-content-wrap -->
        </div><!-- .swiper-wrapper -->

        <div class="pagination-wrap position-absolute w-100">
            <div class="container">
                <div class="swiper-pagination"></div>
            </div><!-- .container -->
        </div><!-- .pagination-wrap -->

        <!-- Add Arrows -->
        <div class="swiper-button-next flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
        </div>

        <div class="swiper-button-prev flex justify-content-center align-items-center">
            <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
        </div>
    </div><!-- .hero-slider -->

    <!-- .home-page-icon-boxes -->

    <div class="home-page-welcome">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 order-2 order-lg-1">
                    <div class="welcome-content">
                        <header class="entry-header">
                            <h2 class="entry-title">Tentang Perusahaan</h2>
                        </header><!-- .entry-header -->

                        <div class="entry-content mt-5">
                            <p>BULOG adalah perusahaan umum milik negara yang bergerak di bidang logistik pangan. Ruang lingkup bisnis perusahaan meliputi usaha logistik/pergudangan, survei dan pemberantasan hama, penyediaan karung plastik, usaha angkutan, perdagangan komoditi pangan dan usaha eceran. Sebagai perusahaan yang tetap mengemban tugas publik dari pemerintah, BULOG tetap melakukan kegiatan menjaga Harga Dasar Pembelian untuk gabah, stabilisasi harga khususnya harga pokok, menyalurkan beras untuk orang miskin (Raskin) dan pengelolaan stok pangan. </p>
                        </div><!-- .entry-content -->

                        <div class="entry-footer mt-5">
                            <a href="{{ url('about') }}" class="btn gradient-bg mr-2">Baca Selengkapnya</a>
                        </div><!-- .entry-footer -->
                    </div><!-- .welcome-content -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                    <img src="{{ asset('images/logo.png') }}" alt="welcome">
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
</div><!-- .home-page-icon-boxes -->

    <div class="home-page-events">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="upcoming-events">
                        <div class="section-heading">
                            <h2 class="entry-title">Divisi Regional</h2>
                        </div><!-- .section-heading -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('images/home1.jpeg') }}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Divisi Regional 26 Lokasi</a></h3>

                                    <div class="posted-date">
                                        <a href="#"> </a>
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        <a href="#"></a>
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"></p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#"></a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('images/home2.jpg') }}" alt="">
                            </figure>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Subdivre 101 Lokasi dan Kanlog 30 Lokasi </a></h3>
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->

                        <div class="event-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('images/home3.jpg') }}" alt="">
                            </figure>
                            <hr>
                            <br/><br/>

                            <div class="event-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="#">Gudang 458 Lokasi</a></h3>

                                    <div class="posted-date">
                                        
                                    </div><!-- .posted-date -->

                                    <div class="cats-links">
                                        
                                    </div><!-- .cats-links -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <p class="m-0"></p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="#"></a>
                                </div><!-- .entry-footer -->
                            </div><!-- .event-content-wrap -->
                        </div><!-- .event-wrap -->
                    </div><!-- .upcoming-events -->
                </div><!-- .col -->

                <div class="col-12 col-lg-6">
                    <div class="featured-cause">
                        <div class="section-heading">
                            <h2 class="entry-title">Produk Bulog</h2>
                        </div><!-- .section-heading -->

                        <div class="cause-wrap d-flex flex-wrap justify-content-between">
                            <figure class="m-0">
                                <img src="{{ asset('images/5.jpg') }}" alt="">
                            </figure>

                            <div class="cause-content-wrap">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <h3 class="entry-title w-100 m-0"><a href="produk.php">Beras Kita</a></h3>

                                   

                                <div class="entry-content">
                                    <p class="m-0">Beras Premiun dengan kualitas terbaik, harga terjangkau dan produk berkualitas.</p>
                                </div><!-- .entry-content -->

                                <div class="entry-footer mt-5">
                                   <div class="buttonharga">
                                    <a href="{{ url('produk') }}" class="btn gradient-bg mr-2">Selengkapnya</a>
                                </div><!-- .entry-footer -->
                            </div><!-- .cause-content-wrap -->

                            
                        </div><!-- .cause-wrap -->
                    </div><!-- .featured-cause -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .home-page-events -->

    <br/><br/>
       <div class="our-causes">
        <div class="container">
            <div class="row">
                <div class="coL-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Yang Mereka Katakan...</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                <div class="col-12">
                    <div class="swiper-container causes-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/1.jpg') }}" alt="">
                                        
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Oktarina</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Pasar Mojopanggung, Banyuwangi</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Saya sudah mengikuti usaha ini selama enam bulan, dan laba yang saya peroleh lebih dari Rp 2 jutaan dalam satu bulan. Dengan modal cukup Rp 5 juta, saya sudah memperoleh sejumlah produk beras, gula dan minyak goreng dari Bulog.Tidak perlu kios atau toko khusus untuk memulainya.</p>
                                        </div><!-- .entry-content -->

                                       
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/2.jpg') }}" alt="">

                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Rapi</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Permatasari, Semarang</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Dengan mengikuti usaha RPK ini saya sudah mendapat jaminan keuntungan dari selisih harga beli dari Bulog dengan harga jual ke konsumen. Meski masih baru, dalam kurun waktu sebulan saya sudah mendapatkan laba bersih Rp 1 jutaan.</p>
                                        </div><!-- .entry-content -->                         
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/3.jpg') }}" alt="">
 
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Iis Aisyah</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Toyiban, Bandung</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Saya sudah menjalankan usaha ini lebih dari 2 tahun sejak akhir 2016 lalu. Semakin lama semakin banyak diminati masyarakat karena selain pembeli dateng ke outlet, dia juga memberi kemudahan dengan mengantarkan pesanan kepada rumah pembeli.</p>
                                        </div><!-- .entry-content -->
 
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/1.jpg') }}" alt="">
                                        
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Oktarina</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Pasar Mojopanggung, Banyuwangi</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Saya sudah mengikuti usaha ini selama enam bulan, dan laba yang saya peroleh lebih dari Rp 2 jutaan dalam satu bulan. Dengan modal cukup Rp 5 juta, saya sudah memperoleh sejumlah produk beras, gula dan minyak goreng dari Bulog.Tidak perlu kios atau toko khusus untuk memulainya.</p>
                                        </div><!-- .entry-content -->

                                       
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/2.jpg') }}" alt="">

                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Rapi</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Permatasari, Semarang</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Dengan mengikuti usaha RPK ini saya sudah mendapat jaminan keuntungan dari selisih harga beli dari Bulog dengan harga jual ke konsumen. Meski masih baru, dalam kurun waktu sebulan saya sudah mendapatkan laba bersih Rp 1 jutaan.</p>
                                        </div><!-- .entry-content -->                         
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->
                            
                            <div class="swiper-slide">
                                <div class="cause-wrap">
                                    <figure class="m-0">
                                        <img src="{{ asset('images/testimoni/3.jpg') }}" alt="">
 
                                    </figure>

                                    <div class="cause-content-wrap">
                                        <header class="entry-header d-flex flex-wrap align-items-center">
                                            <h3 class="entry-title w-100 m-0"><a>Iis Aisyah</a></h3>
                                            <div class="testimoni">
                                            	<h5 style="color: orangered">RPK Toyiban, Bandung</h5>
                                            </div>
                                        </header><!-- .entry-header -->

                                        <div class="entry-content">
                                            <p class="m-0">Saya sudah menjalankan usaha ini lebih dari 2 tahun sejak akhir 2016 lalu. Semakin lama semakin banyak diminati masyarakat karena selain pembeli dateng ke outlet, dia juga memberi kemudahan dengan mengantarkan pesanan kepada rumah pembeli.</p>
                                        </div><!-- .entry-content -->
 
                                    </div><!-- .cause-content-wrap -->
                                </div><!-- .cause-wrap -->
                            </div><!-- .swiper-slide -->

                        </div><!-- .swiper-wrapper -->

                    </div><!-- .swiper-container -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
                    </div>

                    <div class="swiper-button-prev flex justify-content-center align-items-center">
                        <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z"/></svg></span>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    <div class="home-page-limestone">
      <div class="container">
            <div class="row align-items-end">
                  <div class="coL-12 col-lg-4">
                  <div class="section-heading">
                           <h2 class="entry-title">RPK di Surabaya</h2>

                        <p class="mt-5">Tersebar sekitar +- 50 RPK di Kota Surabaya</p>
                    </div><!-- .section-heading -->
                </div><!-- .col -->

                <div class="col-12 col-lg-5">
                   <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1ufKl5uBOnwe8PyRhJgjqaAyw4EB0_-wl" width="700" height="450"></iframe>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .our-causes -->

    @extends('layouts.footer')
</body>
</html>
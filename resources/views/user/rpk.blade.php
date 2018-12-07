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
                    <h1>Rumah Pangan Kita (RPK)</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="news-content">
                       <center><h1> APA ITU RPK ?</h1></center>
						<center><img src="images/rpk.jpg" width="400"></center>

                        <header class="entry-header d-flex flex-wrap justify-content-between align-items-center">
                            <div class="header-elements">
                              <hr size="10">

                                <h2 class="entry-title"><a>Tata Cara dan Persyaratan Pendaftaran Sebagai Sahabat RPK</a></h2>

                                
                            </div>

                            
                                <center><img src="images/daftar rpk.png" alt=""></center>
                            </div>
                        </header>

                        <div class="entry-content">
                         <p>1. Pendaftaran Online klik <a href="{{ url('daftar') }}" style="color:orangered">Disini</a> <br/>
							   &nbsp;&nbsp;&nbsp;Pendaftaran Offline di Kantor Perum BULOG Divre/Subdivre terdekat di kota Anda<br/>
							2. Mengisi formulir permohonan sebagai sahabat RPK baik online atau offline<br/>
							3. Melengkapi persyaratan administrasi seperti:<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;- fotokopi KTP/SIM<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;- Surat Keterangan Domisili dari RT/RW/Kelurahan<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;- Surat Izin Usaha (untuk kedai/toko)<br/>
								&nbsp;&nbsp;&nbsp;&nbsp;- Fotokopi SIUP/Surat Izin Usaha dan NPWP(untuk Koperasi /Kelembagaan lainnya)<br/>
							4. Verifikasi & Survey Lokasi<br/>
							5. Penetapan menjadi Sahabat RPK<br/>
							6. Pembelanjaan awal<br/></p>
                        </div>
                    </div> 
                   </div>             
            </div>
        </div>
    </div>

    @extends('layouts.footer')

</body>
</html>
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
                         <p>1. Pendaftaran Online klik <a href="#" style="color:orangered">Disini</a> <br/>
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

                        <footer class="entry-footer">
                            <br/><br/><center><a href="#Modal" class="btn gradient-bg" data-toggle="modal">DAFTAR SEKARANG</a></center>
                        </footer>

                        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="login-wrap">
                                    <div class="login-html" style="padding-top: 15px;">
                                        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Masuk</label>
                                        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Daftar</label>
                                        <div class="login-form">
                                            <div class="sign-in-htm">
                                                <div class="group">
                                                    <label for="user" class="label">Username</label>
                                                    <input id="user" type="text" class="input">
                                                </div>
                                                <div class="group">
                                                    <label for="pass" class="label">Password</label>
                                                    <input id="pass" type="password" class="input" data-type="password">
                                                </div>
                                                <div class="group">
                                                    <input id="check" type="checkbox" class="check" checked>
                                                    <label for="check"><span class="icon"></span> Biarkan Masuk</label>
                                                </div>
                                                <div class="group">
                                                    <input type="submit" class="button" value="Masuk">
                                                </div>
                                                <div class="hr"></div>
                                                <div class="foot-lnk">
                                                    <a href="#forgot">Lupa Password?</a>
                                                </div>
                                            </div>
                                            <div class="sign-up-htm">
                                                <div class="group">
                                                    <label for="user" class="label">Username</label>
                                                        <input id="user" type="text" class="input">
                                                </div>
                                                <div class="group">
                                                    <label for="pass" class="label">Password</label>
                                                    <input id="pass" type="password" class="input" data-type="password">
                                                </div>
                                                <div class="group">
                                                    <label for="pass" class="label">Nama Lengkap</label>
                                                    <input id="pass" type="password" class="input" data-type="password">
                                                </div>
                                                <div class="group">
                                                    <label for="nomor" class="label">Nomor HP</label>
                                                    <input id="nomor" type="text" class="input">
                                                </div>
                                                <div class="group">
                                                    <label for="pass" class="label">Alamat</label>
                                                    <input id="pass" type="text" class="input">
                                                </div>
                                                <center>
	                                                <div class="radio">
	                                                    <label>
	                                	                    <input type="radio" name="optionsRadios">Laki-laki
	                                                    </label>
	                                                    <label>
	                                                        <input type="radio" name="optionsRadios">Perempuan
	                                                    </label>
	                                                </div>
                                                </center>
                                                <div class="group">
                                                    <input type="submit" class="button" value="Daftar">
                                                </div>
                                                <div class="hr"></div>
                                                <div class="foot-lnk">
                                                    <label for="tab-1">Sudah member?</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- END OF MODAL -->

                    </div> 
                   </div>             
            </div>
        </div>
    </div>

    @extends('layouts.footer')

</body>
</html>
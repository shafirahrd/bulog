<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="{{ asset('css/daftar.css') }}" rel="stylesheet" media="all">
</head>

<body class="single-page about-page">
	@include('layouts.header')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Daftar RPK</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="news-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="news-content">
                       <form action="{{'rpk-create'}}" method= "post" enctype="multipart/form-data">
                       {{ csrf_field() }}
                        <div class="form-row">
                            <div class="name">KTP</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="ktp" placeholder="KTP">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">NPWP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="npwp" placeholder="NPWP">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Pemilik Toko</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="pemilik_toko" placeholder="Pemilik Toko">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Toko</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nama_toko" placeholder="Nama Toko">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="alamat" placeholder="Alamat Lengkap"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kota/Kabupaten</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="kota_kabupaten" placeholder="Kota/Kabupaten">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kode Pos</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="kode_pos" placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor HP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nomor_hp" placeholder="Nomor Ponsel">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah Foto Identitas</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="foto_identitas" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                </div>
                                <div class="label--desc">Upload Foto Identitas (KTP/SIM). Maksimal 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah Izin Usaha</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="foto_izin_usaha" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                </div>
                                <div class="label--desc">Upload Foto Izin Usaha dari Kelurahan. Maksimal 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah NPWP</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="foto_npwp" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                </div>
                                <div class="label--desc">Upload Foto NPWP. Maksimal 50 MB</div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-warning" style="float:right;" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
                    </div> 
                </div>             
            </div>
        </div>
    </div>

    @extends('layouts.footer')

</body>
</html>
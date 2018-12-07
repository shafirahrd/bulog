<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    @include('layouts.head')

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/daftar.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Daftar RPK</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
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
                                    <input class="input--style-6" type="text" name="pemiliktoko" placeholder="Pemilik Toko">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nama Toko</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="namatoko" placeholder="Nama Toko">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="message" placeholder="Alamat Lengkap"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Kode Pos</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="kodepos" placeholder="Kode Pos">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nomor HP</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" name="nohp" placeholder="Nomor Ponsel">
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
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload Foto Identitas (KTP/SIM). Maksimal 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah Izin Usaha</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload Foto Izin Usaha dari Kelurahan. Maksimal 50 MB</div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Unggah NPWP</div>
                            <div class="value">
                                <div class="input-group js-input-file">
                                    <input class="input-file" type="file" name="file_cv" id="file">
                                    <label class="label--file" for="file">Choose file</label>
                                    <span class="input-file__info">No file chosen</span>
                                </div>
                                <div class="label--desc">Upload Foto NPWP. Maksimal 50 MB</div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger" type="submit">Kirim</button>
                    <button class="btn btn-warning" style="float:right;"><a href="{{ url('') }}">Kembali</a></button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!-- end document-->
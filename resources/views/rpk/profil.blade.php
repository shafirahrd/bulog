<!doctype html>
<html lang="en">
<head>
	@include('rpk.parts.head')
</head>
<body>

<div class="wrapper">
    <!--@include('rpk.parts.sidebar')-->
    <div class="sidebar" data-background-color="white" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{ url('')}}" class="simple-text">
                    RPK BULOG
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('rpk-dashboard') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('rpk-profil')}}">
                        <i class="ti-user"></i>
                        <p>Profil RPK</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('rpk-komoditas')}}">
                        <i class="ti-view-list-alt"></i>
                        <p>Komoditas</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('rpk-laporan')}}">
                        <i class="ti-text"></i>
                        <p>Laporan Mingguan</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('')}}">
                        <i class="ti-pencil-alt2"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand">Profil RPK Laku Jaya</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title"><center>RPK LAKU JAYA</center></h4><hr>
                            </div>
                            <div class="content">
                            	<div class="icon-big icon-warning text-center">
                                    <i class="ti-user"></i>
                                <div>
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>Nama Toko</label>
                                                <input type="text" name="namatoko" class="form-control border-input" disabled placeholder="Nama Toko" value="Laku Jaya">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Pengelola Toko</label>
                                                <input type="text" name="pemiliktoko" class="form-control border-input" placeholder="Pengelola Toko" value="Anindya Hantari">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Username</label>
                                                <input type="text" name="username" class="form-control border-input" placeholder="Username" value="hantariendel">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. KTP</label>
                                                <input type="text" name="ktp" class="form-control border-input" placeholder="Nomor KTP" value="6474120419961004">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>No. NPWP</label>
                                                <input type="text" name="npwp" class="form-control border-input" placeholder="Nomor NPWP" value="4001699140214764">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="alamat" class="form-control border-input" placeholder="Alamat Lengkap" value="Malang, Indonesia">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Kode Pos</label>
                                                <input type="text" name="kodepos" class="form-control border-input" placeholder="Kode Pos" value="64022">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" name="email" class="form-control border-input" placeholder="Email" value="anindyahantari@gmail.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made for <a href="{{ url('')}}">BULOG</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>
	@include('rpk.parts.foot')
</html>

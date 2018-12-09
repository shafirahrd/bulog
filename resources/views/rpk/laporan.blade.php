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
                <li>
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
                <li class="active">
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
                    <a class="navbar-brand">Laporan Mingguan RPK Laku Jaya</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Laporan</h4>
                                <p class="category">Laporan mingguan produk dilakukan dengan update jumlah komoditas di halaman <a href="{{ url('rpk-komoditas') }}">Komoditas</a>. Mengisi halaman ini apabila ada keterangan terkait penjualan produk RPK.</p>
                            </div>
                            <div class="content">
                                <form method="POST">
                                	{{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <textarea rows="5" class="form-control border-input" placeholder="Masukkan keterangan" value="laporan">Penjualan hari ini lebih ramai dibandingkan sebelumnya.
Tidak ada kendala kecuali terjadi beberapa kali inspeksi oleh kepolisian daerah.
Aman bosqu</textarea>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info btn-fill btn-wd">Kirim Laporan</button>
                                </div>
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

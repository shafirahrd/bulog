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
                <li class="active">
                    <a href="{{ url('rpk-dashboard/1') }}">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('rpk-profil/1')}}">
                        <i class="ti-user"></i>
                        <p>Profil RPK</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('rpk-komoditas/1')}}">
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
                    <a class="navbar-brand">Dashboard RPK {{$rpk[0]->nama_toko}}</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-wallet"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="numbers" style="text-align: left;">
                                            <p>{{$catatan[0]->created_at}}</p>
                                            Rp {{$last[0]->total}},-
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-calendar"></i> Laporan terakhir
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <div class="icon-big icon-danger text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-9">
                                        <div class="numbers" style="text-align: left;"">
                                            <p>Sisa Komoditas</p>
                                            {{$komoditas[0]->nama}} : {{$komoditas[0]->jumlah}}
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                        <i class="ti-shopping-cart"></i> Komoditas hampir habis
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Statistik Penjualan</h4>
                                <p class="category">2018</p>
                            </div>
                            <div class="content">
                                <div id="chartActivity" class="ct-chart"></div>
                                <div class="footer">
                                    <hr>
                                    <div class="stats">
                                        <div class="chart-legend">
	                                        <i class="fa fa-circle text-info"></i> Produk 1
	                                        <i class="fa fa-circle text-danger"></i> Produk 2
	                                        <i class="fa fa-circle text-warning"></i> Produk 3
                                    	</div>
                                    </div>
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
	@include('rpk.parts.foot')
</body>
</html>
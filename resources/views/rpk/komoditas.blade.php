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
                <li class="active">
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
                    <a class="navbar-brand">Komoditas RPK Laku Jaya</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Komoditas</h4>
                                <p class="category">Jumlah komoditas saat ini</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                        <th>Nomor</th>
                                    	<th>Produk</th>
                                    	<th>Jumlah</th>
                                    	<th>Harga</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        	<td>1</td>
                                        	<td>Beras Kita</td>
                                        	<td>20 karung</td>
                                        	<td>55.000</td>
                                        	<td>Edit</td>
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                        	<td>Gula Kita</td>
                                        	<td>50 bungkus</td>
                                        	<td>12.500</td>
                                        	<td>Edit</td>
                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                        	<td>Bawang Putih</td>
                                        	<td>100 siung</td>
                                        	<td>9.500</td>
                                        	<td>Edit</td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                        	<td>Bawang Merah</td>
                                        	<td>95 siung</td>
                                        	<td>8.000</td>
                                        	<td>Edit</td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                        	<td>MiGor Kita</td>
                                        	<td>25 bungkus</td>
                                        	<td>12.000</td>
                                        	<td>Edit</td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                        	<td>Beras Sachet</td>
                                        	<td>50 bungkus</td>
                                        	<td>2.500</td>
                                        	<td>Edit</td>
                                        </tr>
                                    </tbody>
                                </table>

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

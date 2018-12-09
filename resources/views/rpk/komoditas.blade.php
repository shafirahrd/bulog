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
                <li class="active">
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
                    <a class="navbar-brand">Komoditas RPK</a>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <div class="row">
                                    <div class="col-md-10">
                                        <h4 class="title">Komoditas</h4>
                                        <p class="category">Jumlah komoditas saat ini</p>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-warning" style="float:right;"><a href="{{ url('rpk-komoditas-add') }}">Tambah Komoditas</a></button>
                                    </div>
                                </div>
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
                                    <?php $x=1; ?>
                                    @foreach($komoditas as $komoditas)
                                        <tr>
                                        	<td><?php echo $x; $x=$x+1; ?></td>
                                        	<td>{{$komoditas->nama}}</td>
                                        	<td>{{$komoditas->jumlah}}</td>
                                        	<td>{{$komoditas->harga}}</td>
                                        	<td>
                                            <button class="btn btn-warning"><a href="{{ action('RPK\KomoditasController@edit', ['id' => $komoditas->id_laporan]) }}">Edit</a></button>
                                            </td>
                                        </tr>
                                    @endforeach
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

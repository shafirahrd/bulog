<!doctype html>
<html lang="en">

@include('admin.parts.header')

<body>
    <div class="wrapper">
        @include('admin.parts.navbar')
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="#" class="simple-text">
                    Admin
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active">
                        <a href="{{ url('admin-dashboard') }}">
                            <i class="material-icons">playlist_add_check</i>
                            <p>Data Galeri</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-jadwal') }}">
                            <i class="material-icons">event</i>
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-pelanggan') }}">
                            <i class="material-icons">person</i>
                            <p>Pelanggan</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-instruktur') }}">
                            <i class="material-icons">group</i>
                            <p>Instruktur</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin-mobil') }}">
                            <i class="material-icons">directions_car</i>
                            <p>Mobil</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            @include('admin.parts.navbar')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Data Galeri</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                        @foreach($galeri as $listgaleri)
                                            <tr>
                                                <td>{{$listgaleri->id}}</td>
                                                <td>{{$listgaleri->nama}}</td>
                                                <td>{{$listgaleri->gambar}}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{action('GaleriController@update', $galeri->id)}}"
                                                    <button data-target="#edit-{{$listgaleri->id}}" style="margin-right: 5%" type="button" data-toggle="modal" rel="tooltip" title="Edit Galeri" class="btn btn-primary btn-warning btn-xs">
                                                        <i class="material-icons">edit</i>
                                                    </button>
                                                    <button data-target="#hapus-{{$listgaleri->id}}" type="button" data-toggle="modal" rel="tooltip" title="Hapus Galeri" class="btn btn-primary btn-warning btn-xs">
                                                        <i class="material-icons">delete</i>
                                                    </button>
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
        </div>
    </div>
</body>

@include('admin.parts.footer')

</html>
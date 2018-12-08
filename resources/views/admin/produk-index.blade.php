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
                    <li>
                        <a href="{{'admin-galeri'}}">
                            <i class="fa fa-file-image-o" aria-hidden="true"></i>
                            <p>Galeri Foto RPK</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{'admin-produk'}}">
                            <i class="fa fa-dropbox" aria-hidden="true"></i>
                            <p>Produk RPK</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{'admin-RPK'}}">
                            <i class="fa fa-vcard" aria-hidden="true"></i>
                            <p>Pendaftar RPK</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            @include('admin.parts.navbar')
            <div class="content">
            <a href="{{'produk-create'}}" style="float: left;" class="btn btn-primary waves-effect waves-light m-t-10">
                <i class="fa fa-plus" aria-hidden="true"></i>  Produk RPK 
            </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Produk RPK</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Deskripsi</th>
                                            <th>Harga</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </thead>
                                        <tbody>
                                        @foreach($produk as $listproduk)
                                            <tr>
                                                <td>{{$listproduk->id_produk}}</td>
                                                <td>{{$listproduk->nama}}</td>
                                                <td>{{$listproduk->deskripsi}}</td>
                                                <td>{{$listproduk->harga}}</td>
                                                <td>{{$listproduk->gambar}}</td>
                                                <td class="td-actions text-right">
                                                    <a href="{{action('ProdukController@edit', $listproduk->id_produk)}}" class="btn btn-primary btn-warning btn-xs" sstyle="margin-right:5px"">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <form action="{{action('ProdukController@delete', $listproduk->id_produk)}}" method="get">
                                                        {{ csrf_field() }}
                                                        <!-- <input name="_method" type="hidden" value="DELETE"> -->
                                                        <button class="btn btn-danger" type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </form>
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
<!doctype html>
<html lang="en">

@include('admin.parts.header')

<body>
    <div class="wrapper">
        @include('admin.parts.navbar')
        <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
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
                    <li>
                        <a href="{{'admin-produk'}}">
                            <i class="fa fa-dropbox" aria-hidden="true"></i>
                            <p>Produk RPK</p>
                        </a>
                    </li>
                    <li class="active">
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
            <div class="content" data-color="orange">
            <a href="{{'produk-create'}}" style="float: left;" class="btn btn-warning waves-effect waves-light m-t-10">
                <i class="fa fa-plus" aria-hidden="true"></i>  Pendaftar RPK 
            </a>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="orange">
                                    <h4 class="title">Daftar RPK</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-warning">
                                            <th>ID</th>
                                            <th>KTP</th>
                                            <th>NPWP</th>
                                            <th>Pemilik Toko </th>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Kota/Kabupaten</th>
                                            <th>Kode Pos</th>
                                            <th>Nomer HP</th>
                                            <th>Email</th>
                                        </thead>
                                        <tbody>
                                        @foreach($rpk->where('status','=',1)->sortBy('id_rpk') as $listrpk)
                                            <tr>
                                                <td>{{$listrpk->id_rpk}}</td>
                                                <td>{{$listrpk->ktp}}</td>
                                                <td>{{$listrpk->npwp}}</td>
                                                <td>{{$listrpk->pemilik_toko}}</td>
                                                <td>{{$listrpk->nama_toko}}</td>
                                                <td>{{$listrpk->alamat}}</td>
                                                <td>{{$listrpk->kota_kabupaten}}</td>
                                                <td>{{$listrpk->kode_pos}}</td>
                                                <td>{{$listrpk->nomor_hp}}</td>
                                                <td>{{$listrpk->email}}</td>
                                                <!-- <td><img src="{{ url('storage/images3/'.$listrpk->gambar) }}" alt="" title="" /></td> -->
                                                <td class="td-actions text-right">
                                                    <a href="{{action('RPKController@edit', $listrpk->id_rpk)}}" class="btn btn-primary btn-warning btn-xs" sstyle="margin-right:5px"">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                    </a>
                                                    <form action="{{action('RPKController@delete', $listrpk->id_rpk)}}" method="get">
                                                        {{ csrf_field() }}
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
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title"> Calon Pendaftar RPK</h4>
                                    <p class="category"></p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-danger">
                                            <th>ID</th>
                                            <th>KTP</th>
                                            <th>NPWP</th>
                                            <th>Pemilik Toko </th>
                                            <th>Nama Toko</th>
                                            <th>Alamat</th>
                                            <th>Kota/Kabupaten</th>
                                            <th>Kode Pos</th>
                                            <th>Nomer HP</th>
                                            <th>Email</th>
                                        </thead>
                                        <tbody>
                                        @foreach($rpk->where('status','=',0)->sortBy('id_rpk') as $listrpk)
                                            <tr>
                                                <td>{{$listrpk->id_rpk}}</td>
                                                <td>{{$listrpk->ktp}}</td>
                                                <td>{{$listrpk->npwp}}</td>
                                                <td>{{$listrpk->pemilik_toko}}</td>
                                                <td>{{$listrpk->nama_toko}}</td>
                                                <td>{{$listrpk->alamat}}</td>
                                                <td>{{$listrpk->kota_kabupaten}}</td>
                                                <td>{{$listrpk->kode_pos}}</td>
                                                <td>{{$listrpk->nomor_hp}}</td>
                                                <td>{{$listrpk->email}}</td>
                                                <!-- <td><img src="{{ url('storage/images3/'.$listrpk->gambar) }}" alt="" title="" /></td> -->
                                                <td class="td-actions text-right">
                                                    <form action="{{action('RPKController@status_update', $listrpk->id_rpk)}}" method="post">
                                                        {{ csrf_field() }}
                                                        <button class="btn btn-danger" type="submit">Verifikasi</button>
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
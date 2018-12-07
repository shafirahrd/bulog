<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body class="single-page causes-page">
    @include('layouts.header')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Produk Kami</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="featured-cause">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2 class="entry-title">Produk Unggulan</h2>
                    </div><!-- .section-heading -->
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row">
                
                   <?php
					$db = mysqli_connect('localhost','root','','bulog');
					$sql = "SELECT * FROM produk";
					$result = mysqli_query($db, $sql);
					if (mysqli_num_rows($result) ==0 ){
						echo "Tidak ada Produk";
					}
					else {
						while ($row = mysqli_fetch_assoc($result)){
							$id = $row['id'];
							$nama = $row['nama'];
							$deskripsi = $row['deskripsi'];
							$harga = $row['harga'];
					
					?>
					<div class="col-12 col-lg-6">
                    <div class="cause-wrap d-flex flex-wrap justify-content-between">
                        <figure class="m-0">
                           <?php echo "<img src='images/".$row['gambar']."'>";
							?>
                            
                        </figure>

                        <div class="cause-content-wrap">
                            <header class="entry-header d-flex flex-wrap align-items-center">
                                <h3 class="entry-title w-100 m-0"><a><?php echo $nama;
									?></a></h3>

                            <div class="entry-content">
                                <h6 class="m-0"><?php echo $deskripsi; ?></h6><br><br>
                            </div><!-- .entry-content -->

                            <div class="buttonharga">
                                <a href="#" class="btn gradient-bg mr-2"><?php echo $harga; ?></a>
                            </div><!-- .entry-footer -->
					
                        </div><!-- .cause-content-wrap -->
                    </div><!-- .cause-wrap -->
                </div><!-- .col -->
						<?php
						}
					}
					?>
				
               
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .featured-cause -->
    <!-- .our-causes -->
    <!-- .highlighted-cause -->
    <!-- .our-causes -->

    @extends('layouts.footer')
        
</body>
</html>
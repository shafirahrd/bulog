<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.head')
</head>

<body class="single-page about-page">
	@include('layouts.header')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Galeri RPK</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="portfolio-wrap">
<div class="container">
  <div class="row portfolio-container">
               <?php
					$db = mysqli_connect('localhost','root','','bulog');
					$sql = "SELECT * FROM galeri";
					$result = mysqli_query($db, $sql);
					if (mysqli_num_rows($result) ==0 ){
						echo "Tidak ada Foto";
					}
					else {
						while ($row = mysqli_fetch_assoc($result)){
							$id = $row['id_galeri'];
							$nama = $row['nama'];											
					?>
                <div class="col-12 col-md-6 col-lg-4 portfolio-item">
                    <div class="portfolio-cont">
                        <?php echo "<img src='images/".$row['gambar']."'>";
						?>

                        <h3 class="entry-title"><center><a><?php echo $nama;
									?></a></center></h3>
                        <h4><center><?php echo $id;
									?></center></h4>
                    </div>
                </div>
                <?php
						}
					}
				?>

               
            <div class="row"> </div>
        </div>
            <div class="col-12 d-flex justify-content-center mt-72"> <a href="galeri.php" class="btn gradient-bg load-more-btn">Load More</a> </div><br/></br><hr>
  </div>

@extends('layouts.footer')

</body>
</html>
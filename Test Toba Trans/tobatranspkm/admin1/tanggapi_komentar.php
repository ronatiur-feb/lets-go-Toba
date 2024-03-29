<?php require_once("../commons/function.php"); ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Tujuan | Admin Toba Trans</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<style>
	#gambarGaleri{
		width: 60px;
		height: 30px;
	}
</style>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Toba Trans</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="../logout.php" class="btn btn-success square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!-- <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive"/>
                        </li> -->
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Beranda</a>
                    </li>
                    <li>
                        <a  href="data_toba_wisata.php?page=1"><i class="fa fa-tree fa-3x"></i> Toba Wisata</a>
                    </li>
                    
                    
                     <li>
                        <a  href="data_lamaran_supir.php?page=1"><i class="fa fa-folder-open fa-3x"></i> Lamaran Supir</a>
                    </li>
                      <li>
                        <a href="data_user.php?page=1"><i class="fa fa-user fa-3x"></i> Daftar Pengguna</a>
                    </li>
                     <li>
                        <a  href="data_supir.php?page=1"><i class="fa fa-user fa-3x"></i> Daftar Supir</a>
                    </li>
                    <li>
                        <a  href="data_tujuan.php?page=1"><i class="fa fa-exchange fa-3x"></i> Daftar Tujuan</a>
                    </li>
                           <li>
                        <a  href="data_mobil.php?page=1"><i class="fa fa-taxi fa-3x"></i> Daftar Mobil</a>
                    </li>   
                      <li  >
                        <a  href="data_galeri.php?page=1"><i class="fa fa-picture-o fa-3x"></i> Daftar Galeri</a>
                    </li>
                    <li  >
                        <a class="active-menu" href="data_komentar.php?page=1"><i class="fa fa-comments fa-3x"></i> Daftar Komentar </a>
                    </li>           
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <!-- <div class="row">
                    <div class="col-md-12">
                     <h2>Blank Page</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div> -->
    <div class="container">	
		<div class="row">
			<div class="col-md-6">
				<?php 
                    $idKomentar = $_GET['id_komentar'];

                    $query = "SELECT * FROM komentar WHERE id_daftar=$idKomentar";
                        $komentar =mysqli_query($conn, $query);
                        while($komentars = mysqli_fetch_array($komentar)){
                         ?>
                <h3><?=$komentars['subjek'];?></h3><br>	
			     <p><?=$komentars['isi_komentar'];?></p>

                 <form action="tanggapi_komentar.php?id_komentar=<?=$komentars['id_daftar'];?>" method="post">
                 <h4>Tulis Tanggapan</h4>
                 <textarea name="tanggapan" class="form-control" style="height: 250px;">     
                 </textarea><br>
                     <button name="tanggapiKomentar" class="btn btn-primary">Tanggapi</button>
                </form> 
                <?php } ?>
				</table>
			</div>
		</div>
	</div>
                 <!-- /. ROW  -->
    <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

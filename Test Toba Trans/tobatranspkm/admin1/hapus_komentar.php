<?php 
	global $conn;
	$conn = mysqli_connect("localhost", "root", "", "tobatrans");

	//$conn = mysqli_connect("localhost", "p1d4ti08", "6YsE4o1p", "p1d4ti08_pu");
		
	if(!$conn){
		die("Masalah Pada Database");
	}

	$db_use = mysqli_select_db($conn, "tobatrans") or die("Select Database Problem !!");

	$id = $_GET['id_komentar'];
    $query = "DELETE FROM komentar WHERE id_komentar='$id'";
	if($conn->query($query)==true){
		echo"<script>alert('Hapus Komentar Berhasil');</script>";
	}
    header('Refresh:0 url=data_komentar.php');
?>
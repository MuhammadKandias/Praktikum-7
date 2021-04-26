  
<?php
// sebagai session php
session_start();
// menyambung dengan koneksi
include 'koneksi.php';
// mengkaitkan data  dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$log = mysqli_num_rows($data);
if($log > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:tampilkontak.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>
?>
<?php 
include 'database.php';
$db = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $db->input($_POST["nama"],$_POST["alamat"],$_POST["nomor_telepon"],$_POST["kendaraan"],$_POST["nomor_pelat"]);
    header("location:index.php");

}elseif($aksi == "hapus"){ 	
    $db->hapus($_GET['id']);
   header("location:index.php");
}elseif($aksi == "update"){
    $db->update($_POST['id'],$_POST["nama"],$_POST["alamat"],$_POST["nomor_telepon"],$_POST["kendaraan"],$_POST["nomor_pelat"]);
    header("location:index.php");
}
?>
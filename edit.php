<?php
include 'main.php';
include 'database.php';
$db = new database();
?>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>edit data pengunjung</h1>
				</div>

				<!-- tabel  -->
<div class="card-body">

	<form action="proses.php?aksi=update" method="post">
    
<?php
foreach($db->edit($_GET['id']) as $data){
?>
		
			<div class="form-group">
				<label for="nama">id</label>
				<input type="text" name="id" value="<?php echo $data['id'] ?>" class="form-control" required>
			</div>
			
            <div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nomor_telepon">Nomer Telpon</label>
				<input type="text" name="nomor_telepon" value="<?php echo $data['nomor_telepon'] ?>" class="form-control" required>
			</div>

            <div class="form-group">
				<label for="kendaraan">Jenis kendaraan</label>
				<input type="text" name="kendaraan" value="<?php echo $data['kendaraan'] ?>" class="form-control" required>
			</div>
            
            <div class="form-group">
				<label for="nomor_pelat">Nomor pelat</label>
				<input type="text" name="nomor_pelat" value="<?php echo $data['nomor_pelat'] ?>" class="form-control" required>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php" class="btn btn-secondary">Batal</a>

<?php
}
?>
	</form>
</div>

			</div>
		</div>
	</div>
</div>
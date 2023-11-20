<?php
include 'main.php';
?>


<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<h1>Tambah Data Pengunjung</h1>
				</div>

				<!-- tabel  -->
<div class="card-body">
	<form action="proses.php?aksi=tambah" method="post">
		
			<div class="form-group">
				<label for="nama">Nama</label>
				<input type="text" name="nama" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nomor_telepon">Nomer Telpon</label>
				<input type="number" name="nomor_telepon" class="form-control" required>
			</div>

            <div class="form-group">
				<label for="kendaraan">Jenis kendaraan</label>
				<input type="text" name="kendaraan" class="form-control" required>
			</div>
            
            <div class="form-group">
				<label for="nomor_pelat">Nomor pelat</label>
				<input type="text" name="nomor_pelat" class="form-control" required>
			</div>

			<button type="submit" class="btn btn-primary">Simpan</button>
			<a href="index.php" class="btn btn-secondary">Batal</a>

	</form>
</div>

			</div>
		</div>
	</div>
</div>
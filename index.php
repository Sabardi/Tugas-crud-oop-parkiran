<?php
include 'main.php';
include 'database.php';
$db = new database();
$data_user = $db->tampil_data();
?>

<div class="container mt-5">
  <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h1>DAFTAR Motor HARI INI</h1>
            </div>
	
	    <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th>id parkir</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor telepon</th>
                    <th>Jenis kendaraan</th>
                    <th>Nomor pelat</th>
                    <th>Aksi</th>
	            </tr>

<?php
	$no = 1;
	foreach($data_user as $row){
	?>
<tr>
    <td><?php echo $no++; ?></td>
	<td><?php echo $row['nama']; ?></td>
	<td><?php echo $row['alamat']; ?></td>
    <td><?php echo $row['nomor_telepon']; ?></td>
	<td><?php echo $row['kendaraan']; ?></td>
	<td><?php echo $row['nomor_pelat']; ?></td>
	<td>
			<a href="edit.php?id=<?php echo $row['id']; ?>&aksi=edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="proses.php?id=<?php echo $row['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm"
            	onclick="return confirm('Anda yakin ingin menghapus data ini?')">Hapus</a></td>
</tr>
<?php
    }
    ?>
        </table>
	</div>
</div>
    </div>
</div>
</div>
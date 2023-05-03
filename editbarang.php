<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyResto TREETOP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
<br>
  <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <?php 
 
            //kombinasi format tanggal dan jam
            echo date('l, d-m-Y  h:i:s a');
            
        ?>
        </div>
    </div>
  </div>
  </div>
  
  <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
        <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group">
         <a type="button" class="btn btn-secondary" href="penjualan.php">Penjualan</a><br>
         <a type="button" class="btn btn-secondary" href="pengeluaran.php">Pengeluaran</a><br>
         <a type="button" class="btn btn-secondary" href="barang.php">Data Barang</a><br>
         <a type="button" class="btn btn-secondary" href="karyawan.php">Data Karyawan</a><br>
         <a type="button" class="btn btn-secondary" href="produk.php">Data Produk</a><br> <br> <br> <br>
        </div>
</div>
    </div>
    <div class="col-8">
         <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
         <?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class="container">
		<form method="post" action="updatebarang.php">
			<table>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<div id="emailHelp" class="form-text">Nama Barang</div>
						<input type="text" class="form-control" name="nama" value="<?php echo $d['nama_barang']; ?>"><br>
					<div id="emailHelp" class="form-text">Stock</div>
        				<input type="text" class="form-control" name="nohp" value="<?php echo $d['stock']; ?>">
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
	</div>
         </div>
    </div>

        

    </div>
  </div>
        
 
    

<script src="js/bootstrap..min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
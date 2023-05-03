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

    <?php
        if(isset($_POST['submit'])){
          $pengeluaran = $_POST['pengeluaran'];
          include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$nama_barang = $_POST['nama_barang'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$total = $_POST['total'];
{$total=$jumlah*$harga;}
// menginput data ke database
mysqli_query($koneksi,"insert into pengeluaran values('','$tgl','$nama_barang','$jumlah','$harga','$total')");

// mengalihkan halaman kembali ke index.php
header("location:pengeluaran.php");
        }
      ?>

    <div class="col-9">
         <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
         <div class="card">
            <h5 class="card-header">Data Karyawan</h5>
            <div class="card-body">
                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Data Karyawan
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                    <div class="row">
                                    <div class="container"><center>
                                      <div class="col-md-6">
                                                          <div class="card">
                                                        <div class="card-header bg-primary text-white">Karyawan</div>
                                                        <div class="card-body">
                                      <form method="post" action="">
                                          <div id="emailHelp" class="form-text">Tanggal</div>
                                              <input type="text" class="form-control" name="tgl" value="<?php echo  date("j F Y, G:i");?>">
                                          <div id="emailHelp" class="form-text">Nama Barang</div>
                                              <input type="text" class="form-control" name="nama_barang">
                                          <div id="emailHelp" class="form-text">Jumlah</div>
                                              <input type="text" class="form-control" name="jumlah">
                                          <div id="emailHelp" class="form-text">Harga</div>
                                              <input type="text" class="form-control" name="harga">
                                          <div id="emailHelp" class="form-text">Total</div>
                                              <input type="text" class="form-control" name="total"><br>
                                              <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button><br><br>
                                      </div></div></div></div></div>
                                      </form><br>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <br><br>
                    <table id="pengeluaran" border="1" cellspacing="0" class="table">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      include "koneksi.php";
      $data =mysqli_query($koneksi, "SELECT * FROM karyawan");
      while($result =mysqli_fetch_array($data)){ 
    ?>
    <tr>
        <td><?php echo $result['id']?></td>
        <td><?php echo $result['username'];?></td>
        <td><?php echo $result['jenkel'];?></td>
        <td><?php echo $result['nohp'];?></td>
        <td><?php echo $result['alamat'];?></td>
        <td><?php echo $result['status'];?></td>
        <td>
        <a href="editkaryawan.php?id=<?php echo $result['id']; ?>">EDIT</a> || <a href="hapuskaryawan.php?id=<?php echo $result['id']; ?>">HAPUS</a>
        </td>
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
  </div>
        
 
    

<script src="js/bootstrap..min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
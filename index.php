<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login SkyResto TREETOP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
  <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    
    </div>
    <div class="col">
    </div>
    <div class="col">
    <?php 
 
        echo date('l, d-m-Y');
        
    ?>
    </div>
  </div>
  </div>

  <div class="container text-center">
  <div class="row align-items-center">
    <div class="col">
    
    </div>
    <div class="col">
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
         <div class="text-center">
             <img src="logo.png" class="rounded">
        </div>
        <form action="cek_login.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary" name="proses" value="LOGIN">LOGIN</button>
        </form>
    </div>
    </div>
    <div class="col">

    </div>
  </div>
  </div>

  <script src="js/bootstrap..min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>
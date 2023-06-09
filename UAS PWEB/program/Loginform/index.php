<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="template/images/PNC.png" rel="icon"/>

    <!-- <style>
      body {
        background-image: url("img/biru.jpg");
        background-size: cover;
      }
    </style> -->
  </head>
  <body>
    <!-- <form method="post" action="cek_login.php"></form> -->
    <!-- <style>
		body{
			background-image: src="img/blkng.png";
		}
	</style> -->
    <img class="wave" src="img/wave.png" />
    <div class="container">
      <div class="img">
        <img src="img/foto hijau.png" />
      </div>
      <div class="login-content">
        <form method="post" action="cek_login.php">
          <img src="img/avatar.svg" />
          <h2 class="title">Welcome!</h2>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <h5>Username</h5>
              <input type="text" name="username" class="input" />
            </div>
          </div>
          <div class="input-div pass">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <h5>Password</h5>
              <input type="password" name="password" class="input" />
            </div>
          </div>
          <?php 
        include 'koneksi.php';
        if(isset($_GET['pesan'])){
          if($_GET['pesan'] == "gagal"){
            echo "<font color='#ff0000'>Login gagal! Username atau Password salah!</font>";
          }
        }
        ?>
          <input type="submit" class="btn" value="Login" />
        </form>
      </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

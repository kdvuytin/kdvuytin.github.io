<?php
if (file_exists($_SERVER['DOCUMENT_ROOT'].'/include/config.php')) {
  header("Location: /");
}else{
    if(isset($_POST['install'])){
      $name = $_POST['name'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      
      define("DATABASE", "$name");
      define("USERNAME", "$user");
      define("PASSWORD", "$pass");
      define("LOCALHOST", "localhost");
      
      $conn =new mysqli(LOCALHOST,USERNAME,PASSWORD,DATABASE);
      $conn->query("set names 'utf8'");
      
      $query = '';
      $sqlscript = file('data.sql');
      foreach ($sqlscript as $line) {
        $startwith = substr(trim($line), 0 ,2);
        $endwith = substr(trim($line), -1 ,1);
        if (empty($line) || $startwith == '--' || $startwith == '/*' || $startwith == '//') {
          continue;
        }
        $query = $query . $line;
        if ($endwith == ';') {
          mysqli_query($conn,$query) or die('<div class="alert alert-error">Error: <b>' . $query. '</b></div>');
          $query= '';
        }
      }
          copy("ex_config.php","../include/config.php");
          $file = "../include/config.php";
          file_put_contents($file,str_replace("ex_user",$user,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_pass",$pass,file_get_contents($file)));
          file_put_contents($file,str_replace("ex_mydb",$name,file_get_contents($file)));
          echo '<div class="alert alert-success">Cài đặt thành công!</div>';
          echo '<meta http-equiv="refresh" content="2;url=">';
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Cấu hình website</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- body code -->
  <div class="container">
    
    <section class="py-5 container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-4 mx-auto">
          <h1 class="fw-light text-center">Cài Đặt Database</h1>
          <form method="post" action="">
            <div class="card">
              <div class="card-body">
            <div class="form-group mb-3 mt-4">
              <label>Tài Khoản Database</label>
              <input type="text" name="user" class="form-control" placeholder="Username của Database" required>
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Mật Khẩu Database</label>
              <input type="text" name="pass" class="form-control" placeholder="Password của Database">
            </div>
            <div class="form-group mb-3 mt-4">
              <label>Tên Database</label>
              <input type="text" name="name" class="form-control" placeholder="Tên của Database" required>
            </div>
            <button class="btn btn-block btn-success" type="submit" name="install">Install</button>
          </div>
        </div>
          </form>
        </div>
      </div>
    </section>

  </div>
</body>

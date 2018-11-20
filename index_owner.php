<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/js/bootstrap.js">
    <link rel="stylesheet" href="css/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" integrity="sha384-DmABxgPhJN5jlTwituIyzIUk6oqyzf3+XuP7q3VfcWA2unxgim7OSSZKKf0KSsnh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/slate/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <title>หน้าแรก</title>
  <style>
    body{
      background: rgb(2,0,36);
      background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(255,102,0,1) 0%, rgba(254,160,44,1) 100%);
    }     
    .dropdown-menu {
    background-color:#fea02c;
    }
    #logomember{
      padding:5px
    }
    
    
    </style>
</head>

<body>
<!-- Start Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="img/logo/logo2.png" alt="logo" width="55px" height="55px"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">หน้าแรก <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">จองเครื่อง</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">สมัครสมาชิก</a>
        </li>
      </ul>
      <!-- ย้าย navbar ไปไว้ฝั่งขวา -->
      <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            เจ้าของร้าน</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <img src="img/people.png" id="logomember" alt="logo" width="40px" height="40px"><b>เจ้าของร้าน</b>
            
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="index.php">ออกจากระบบ</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ticket.php">ขายบัตร</a>
        </li>
      </ul>

    </div>
  </nav><br><br>
  <!-- End Navbar -->
<div class="container">
<h3 style="color:white;">จัดการระบบร้าน สำหรับเจ้าของร้าน</h3>
    <div class="row">
       <div class="col-md-3"><br>          
        <button type="button" class="btn btn-warning btn-lg btn-block">พนักงาน</button><br>
        <button type="button" class="btn btn-warning btn-lg btn-block">สมาชิก</button><br>
        <button type="button" class="btn btn-warning btn-lg btn-block">จัดการจองเครื่อง</button><br>
        </div>
        
        <div class="col-md-3"><br>
        <button type="button" class="btn btn-warning btn-lg btn-block">เติมเงิน</button><br>
        <button type="button" class="btn btn-warning btn-lg btn-block">รายงานผลทางการเงิน</button><br>
        </div>

    </div>
</div><br><br><br><br><br>

<!-- Footer -->
<footer class="page-footer font-small bg-secondary disabled pt-4 mt-4">
    <div class="container-fluid text-center text-md-left">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-sm-12 text-center" id="site-intro">
          <!-- Content -->
          <h5 class="text-uppercase">โครงงานของระบบสารสนเทศ </h5>
          <p>คณะวิทยาการจัดการ มหาวิทยาลัยสงขลานครินทร์ วิทยาเขตหาดใหญ่</p>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="https://mdbootstrap.com/bootstrap-tutorial/">Bootstrap.com</a>
    </div>


  </footer>


</body>

</html>
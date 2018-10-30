<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" type="text/javascript"></script>
  <link href="css/mystyle.css" rel="stylesheet" type="text/css"/>
  <link href="bootstrap-4.1.3-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <script src="bootstrap-4.1.3-dist/js/popper.min.js" type="text/javascript"></script>
  <script src="bootstrap-4.1.3-dist/js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <style>
.header{
     background-image: url("img/header1.jpg");
   
}


  </style>
</head>
<body>
  <div class="header">
      <div class="container-fluid">
        <div class="row">
          <div class="logo col-sm-4">
              <a class="" href="Home.php"><img src="img/logo_trans.png" style="width:130px;height:130px"></a>
          </div>
          <div class="search-box col-sm-4"> 
              <form class="search-form"> 
                  <input class="form-control" placeholder="Son, Nước hoa,..." type="text">   
                  <button class="btn btn-link search-btn"> <img src="img/search_icon.png"/></button>
              </form> 
          </div>   
          <div class="headerR col-sm-4">           
                <a href="#" class="btn btn-info "><span class="glyphicon glyphicon-user"></span>Đăng nhập </a>
                <a href="#" class="btn btn-info btn-danger"><span class="glyphicon glyphicon-list-alt"></span>Đăng ký </a>
          </div>
        </div>
      </div>
  </div>
    
<nav class="navbar navbar-expand-sm bg-dark navbar-dark ">
 
  <ul class="navbar-nav ">
    <li class="nav-item ">
        <a class="nav-link" href="#"><strong >HOME</strong></a>
    </li>
    <li class="nav-item dropdown ">
      <a class="nav-link dropbtn" href="#" id="navbardrop" data-toggle="dropdown">
        <b >SKIN CARE</b>
      </a>
      <div class="dropdown-content">
        <a  href="#">Link 1</a>
        <a  href="#">Link 2</a>
        <a  href="#">Link 3</a>
      </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link" href="#"><b >MAKE UP</b></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#"><b >PERFUME</b></a>
    </li>
    <li class="nav-item ">
      <a class="nav-link" href="#"><b >PROMOTION</b></a>
    </li>
    
  </ul>
</nav>
    
   <div id="carousel" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
    <li data-target="#carousel" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/la.jpg" alt="1" width="1100" height="400">  
    </div>
    <div class="carousel-item">
        <img src="img/chicago.jpg" alt="2" width="1100" height="400">   
    </div>
    <div class="carousel-item">
        <img src="img/ny.jpg" alt="3" width="1100" height="400"> 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vy Domain</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="mystyle.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
  <div class="header">
    <div class="header1">
      <div class="container">
        <div class="row">
          <div class="logo col-md-3 col-sm-3">
              <a class="" href="Homepage.php"><img src="logo_trans.png" style="width:150px;height:150px"></a>
          </div>
          <div class="search-box col-md-6 col-sm-6"> 
              <form class="search-form"> <input class="form-control" placeholder="Son, Nước hoa,..." type="text"> 
                  <button class="btn btn-link search-btn"> <i class="glyphicon glyphicon-search"></i> 
                  </button>                 
              </form> 
          </div>   
          <div class="headerR col-md-3 col-sm-3">
              <ul class="list-inline">            
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
              </ul>
          </div>
        </div>
      </div>
    </div>
      <div class="header2" id="navbar">
      <div class="container">
          <nav class="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
            </div>
            <div class="nav navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                <li><a href="#">HOMEPAGE</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">SKIN CARE
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="Homepage.php">A</a></li>
                            <li><a href="Homepage.php">B</a></li>
                            <li><a href="Homepage.php">C</a></li>
                            <li><a href="Homepage.php">D</a></li>
                        </ul>
                </li>
                <li><a href="#">MAKE UP</a></li>
                <li><a href="#">PERFUME</a></li>
                <li><a href="#">PROMOTION</a></li>
                <li><a href="#">ABOUT US</a></li>               
              </ul>
                <ul class="nav navbar-right" style="padding-top: 5px;">                             
                  <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
      <div class="header3">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="IMG_2043.jpg" alt="Los Angeles">
              </div>

              <div class="item">
                  <img src="IMG_2157.JPG" alt="Chicago">
              </div>

              <div class="item">
                <img src="IMG_2087.jpg" alt="New York">
              </div>
                
              <div class="item">
                <img src="IMG_2156.jpg" alt="New York">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
  </div>
<!--    Content-->
    <div class="content container">           
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px">  
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px"> 
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px"> 
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px"> 
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px"> 
        <img src="IMG_2157.JPG" alt="Luxury store" style="width: 30%; margin-top: 10px"> 
    </div>
    <footer class="container-fluid text-center">
        <p>LUXURY STORE</p>  
        
    </footer>

</body>
  <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
          } else {
            navbar.classList.remove("sticky");
          }
        }
    </script>
</html>

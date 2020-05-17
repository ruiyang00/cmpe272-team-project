<?php
if (isset( $_GET['id'])) {
  $search = $_GET['id'];
  $cookie_name = "viewed";
  if(!isset($_COOKIE[$cookie_name])) {							
    $new_cookie = [$search];
    setcookie($cookie_name, json_encode($new_cookie), time() + (86400 * 30), "/");
    $data = json_decode($_COOKIE[$cookie_name], true);
  } else {
    $data = json_decode($_COOKIE[$cookie_name], true);
    if (($key = array_search($search, $data)) !== false) {
      unset($data[$key]);
      $data = array_values($data);
    }
    if (count($data) >= 5) {
      array_shift($data);
    }
    $data[] = $search;
    setcookie($cookie_name, json_encode($data), time() + (86400 * 30), "/");
    $data = json_decode($_COOKIE[$cookie_name], true);
  }
  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "thewayshop";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $writesql = "UPDATE Products SET Visit = Visit+1 WHERE ProductID=$search";
  $conn->query($writesql);
  $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Site Metas -->
  <title>FreshFruit - Ecommerce Bootstrap 4 HTML Template</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Site Icons -->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Site CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Responsive CSS -->
  <link rel="stylesheet" href="css/responsive.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/custom.css">

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Start Main Top -->
  <div class="main-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

          <div class="right-phone-box">
            <p>Call US :- <a href="#"> +1 909-485-7325</a></p>
          </div>
          <div class="our-link">
            <ul>
              <li><a href="login.html">Log In </a></li>
              <li><a href="signup.html">Sign Up</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Main Top -->

  <!-- Start Main Top -->
  <header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
      <div class="container">
        <!-- Start Header Navigation -->
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
          </button>
          </li class><a class="navbar-brand" href="index.html"><img src="images/market.png" class="logo" alt=""></a>
        </div>
        <!-- End Header Navigation -->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-menu">
          <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
            <!-- <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li> -->
            <!-- <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li> -->
            <li class="dropdown active megamenu-fw">
              <!-- <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Product</a> -->
              <ul class="dropdown-menu megamenu-content" role="menu">
                <li>
                  <div class="row">
                    <div class="col-menu col-md-3">
                <li><a href="#">Our location</a></li>
        </div>
        <div class="col-menu col-md-2"></div>
      </div>
      <!-- end col-3 -->
      <div class="col-menu col-md-2">
                <h6 class="title"><a href="market.php">Market</a></h6>
            </div>
      <div class="col-menu col-md-2">
        <h6 class="title"><a href="pokemon.php">Pokemon</a></h6>
      </div>
      <!-- end col-3 -->
      <div class="col-menu col-md-2">
        <h6 class="title"><a href="car.php">Cars</a></h6>
      </div>
      <div class="col-menu col-md-2">
        <h6 class="title"><a href="fruit.php">Fruit</a></h6>
      </div>
      <div class="col-menu col-md-2">
        <h6 class="title"><a href="beauty.php">Beauty</a></h6>
      </div>
      <!-- end col-3 -->
      </div>
      <!-- end row -->
      </li>
      </ul>
      </li>
      <!-- <li class="nav-item"><a class="nav-link" href="service.html">Our Service</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact Us</a></li> -->
      </ul>
      </div>
      <!-- /.navbar-collapse -->

      <!-- Start Atribute Navigation -->
      <div class="attr-nav">
        <ul>
          <!-- <li class="search"><a href="#"><i class="fa fa-search"></i></a></li> -->
          <li class="side-menu"><a href="#">
              <!-- <i class="fa fa-shopping-bag"></i>
                            <span class="badge">3</span> -->
            </a></li>
        </ul>
      </div>
      <!-- End Atribute Navigation -->
      </div>
    </nav>
    <!-- End Navigation -->
  </header>
  <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>View comments </h2>
                   
                </div>
            </div>
        </div>
    </div>
     <!-- End All Title Box --> 

    <!-- Start Shop Page  -->
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html,body {
            font-size: 16px;
        }
    </style>
</head>
<body>
  <div class="container">
    <?php  
      if (isset($_GET['id']) && isset($_GET['domain'])) {

        $search = $_GET['id'];
        $cookie_name = "viewed";
        if(!isset($_COOKIE[$cookie_name])) {							
          $new_cookie = [$search];
          setcookie($cookie_name, json_encode($new_cookie), time() + (86400 * 30), "/");
          $data = json_decode($_COOKIE[$cookie_name], true);
        } else {
          $data = json_decode($_COOKIE[$cookie_name], true);
          if (($key = array_search($search, $data)) !== false) {
            unset($data[$key]);
            $data = array_values($data);
          }
          if (count($data) >= 5) {
            array_shift($data);
          }
          $data[] = $search;
          setcookie($cookie_name, json_encode($data), time() + (86400 * 30), "/");
          $data = json_decode($_COOKIE[$cookie_name], true);
        }

        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "thewayshop";
  
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
  
        $id = $_GET['id'];
        $domain = $_GET['domain'];

        $productsql = "SELECT * FROM Products WHERE ProductID = $id";
        $result = $conn->query($productsql);

        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo
              "<div class=\"list-view-box\">
                <div class=\"row justify-content-md-center\">
                  <div class=\"col-sm-6 col-md-6 col-lg-4 col-xl-4\">
                    <div class=\"products-single fix\">
                      <div class=\"box-img-hover\">
                        <img src= " . $row["Image"] . " class=\"img-fluid\" alt=\"Image\">
                      </div>
                    </div>
                  </div>
                  <div class=\"col-sm-6 col-md-6 col-lg-8 col-xl-8\">
                    <div class=\"why-text full-width\">
                      <li><h4>" . $row["ProductName"] . "</h4></li>";
                      if ($row["Price"] != 0) {
                        echo "<h5>$" . $row["Price"] . "</h5>";
                      }
                      echo 
                      "<p>" . $row["Description"] . "</p>
                      </br>
                      </br>
                      </br>
                      <form action='sentauth.php' method=\"POST\">
                        <input type=\"hidden\" id=\"ProductURL\" name=\"ProductURL\" value=".$row["ProductURL"].">
                        <input type=\"hidden\" id=\"ProductID\" name=\"ProductID\" value=".$row["ProductID"].">
                        <input type=\"hidden\" id=\"Domain\" name=\"Domain\" value=".$row["Domain"].">
                        <input class=\"btn hvr-hover\" type=\"submit\" id=\"submit\" name=\"submit\"  value=\"Company page/Add Comment\">
                      </form>
                    </div>
                  </div>
                </div>
              </div>";
          }     
        }
        // <a class=\"btn hvr-hover\" href=" . $row["ProductURL"] . "?id=" . $row["ProductID"] . "&domain=" . $row["Domain"] . ">Company page/Add Comment</a>
        // join user table
        // get username
        $searchsql = "SELECT * FROM Reviews WHERE ProductID = $id";
        $result = $conn->query($searchsql);
  
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo
              "<div class=\"list-view-box\">
                <div class=\"row justify-content-md-center\">
                  <div class=\"col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                    <div class=\"why-text full-width\">
                      <li><h4>" . $row["UserID"] . "</h4></li>
                      <h5>Rating</h5>
                      <p>" . $row["Rating"] . "</p>
                      <h5>Rating</h5>
                      <p>" . $row["Comment"] . "</p>
                    </div>
                  </div>
                </div>
              </div>";
          }
          $conn->close();
        }
        else {
          echo 
          "<div class=\"list-view-box\">
                <div class=\"row justify-content-md-center\">
                  <div class=\"col-sm-6 col-md-6 col-lg-6 col-xl-6\">
                    <div class=\"why-text full-width\">
                      <li><h4>No Comments</h4></li>
                    </div>
                  </div>
                </div>
            </div>";
        }
      }
    ?>
  </div>
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About ThewayShop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
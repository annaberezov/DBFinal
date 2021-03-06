<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="style.css">

  <title>HAY Sushi</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>
<?php
    $mysqli = new mysqli("3.89.186.66", "team1", "password_XZC_1", "team1_db"); 

    if($mysqli === false){
        echo "ERROR: Could not connect";
    } else {
        echo "all good";
    }

    $sql = "UPDATE customer SET first_name='Eric' WHERE id_customer=4";
    if($mysqli->query($sql) === true){
        echo "Records were updated successfully.";
    } else{
        echo "ERROR: Could not able to execute  ";
    }

    $mysqli->close();
?>
<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Best Sushi at SJU</span>
    <span class="site-heading-lower">HAY Sushi</span>
  </h1>


  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.html">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="about.html">About</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="order.html">Order Online</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="reservation.html">Make a Reservation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class= "wrapper">
    <div class="title">
        <h4> <span> fresh food for good health</span>  our menu</h4>
    </div>

    <div class="menu">
        <div class="single-menu">
            <img src= "menu-1.jpg" alt="">
            <div class="menu-content">
                <h4>Shrimp Shumai <span> $12</span></h4>
                <p>6 pieces. Steamed/pan fried, ponzu ginger sauce</p>
            </div>
        </div>
        <div class="single-menu">
            <img src ="menu-2.jpg" alt="">
            <div class="menu-content">
                <h4>Vegetable Spring Roll <span> $8</span></h4>
                <p>3 pieces.</p>
            </div>
        </div><div class="single-menu">
            <img src = "menu-3.jpg" alt="">
            <div class="menu-content">
                <h4>Cheese Wonton<span> $7.95</span></h4>
                <p>Deep fried. Crab stick, onion, cream cheese(6 pcs)</p>
            </div>
        </div><div class="single-menu">
            <img src = "menu-4.jpg" alt="">
            <div class="menu-content">
                <h4>Miso Soup <span> $6</span></h4>
                <p>green onipn,tofu,seaweed</p>
            </div>
        </div>
        <div class="single-menu">
            <img src = "menu-5.jpg" alt="">
            <div class="menu-content">
                <h4>Steamed Edamame <span> $8</span></h4>
                <p>choice of sea salt or spicy sriracha</p>
            </div>
        </div>
        <div class="single-menu">
            <img src = "menu-6.jpg" alt="">
            <div class="menu-content">
                <h4>Shishito Peppers <span> $12</span></h4>
                <p>yuzuyogury,bonito</p>
            </div>
        </div>
    </div>
</div>
    
  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; Your Website 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

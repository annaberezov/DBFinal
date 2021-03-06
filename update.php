
<?php
error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>HAY Sushi</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

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
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="order.php">Order Online</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="reservation.php">Make a Reservation</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="delete.php">Cancel Reservation</a>
          </li>
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="update.php">Update Reservation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


<?php
$reservation_number ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation_number = ($_POST["reservation_number"]);
}
?>
  <section class="page-section about-heading">
    <div class="container">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Cancel Reservation</span>
                <span class="section-heading-lower">Information</span>
              </h2>
              <form method = "POST">
              <table class="table">
                <tbody>
                    <tr>
                        <th>Reservation Number <input type="text"placeholder="123" name="reservation_number"></th>
                    </tr>
                    <tr>
                        <th scope="row"><input type="submit" class="button" name="cancel" value="Cancel"></th>
                    </tr>
                </tbody>
                </table>
                <?php
                    if(isset($_POST['cancel'])) {
                        $mysqli = new mysqli("3.89.186.66", "team1", "password_XZC_1", "team1_db"); 
                       
                    // Check connection
                    if($mysqli === false){
                        die("ERROR: Could not connect. " . $mysqli->connect_error);
                    }
                    $sql = "DELETE FROM reservation WHERE id_reservation = $reservation_number";
                    if($mysqli->query($sql) === true){
                        //echo "Records inserted successfully.";
                        } else {
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                       }
                       $mysqli->close();
                    }
                
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0 small">Copyright &copy; HAY Sushi 2020</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

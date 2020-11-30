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
            <a class="nav-link text-uppercase text-expanded" href="order.php">Order Online</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="reservation.php">Make a Reservation</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<?php
$edamame = $peppers = "0";
$tuna = $salmon = "0";
$hot_tea = $iced_tea = "0";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $edamame = test_input($_POST["edamame"]);
  $peppers = test_input($_POST["peppers"]);
  $tuna = test_input($_POST["tuna"]);
  $salmon = test_input($_POST["salmon"]);
  $hot_tea = test_input($_POST["hot_tea"]);
  $iced_tea = test_input($_POST["iced_tea"]);
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>/

  <div class="text-faded  text-center py-5">
    <div class="title">
        <h4> <span> fresh food for good health</span>  our menu</h4>
    </div>
    <form>
    <div class="menu">
        <div class="single-menu">
            <img src = "img/menu-5.jpg" alt="">
            <div class="menu-content">
                <h4>Steamed Edamame <span> $8</span></h4>
                <p>choice of sea salt or spicy sriracha</p>
                <input type="number" name="edamame" value="<?php echo($edamame); ?>">
                <button type="submit">Order</button>
            </div>
        </div>
        <div class="single-menu">
            <img src = "img/menu-6.jpg" alt="">
            <div class="menu-content">
                <h4>Shishito Peppers <span> $12</span></h4>
                <p>yuzuyogury,bonito</p>
                <input type="number" name="peppers" value="0">
                <button>Order</button>
            </div>
        </div>
        <div class="single-menu">
            <img src = "img/tuna.jpg" alt="">
            <div class="menu-content">
                <h4>Tuna Sashimi <span> $2.50</span></h4>
                <p>Tuna</p>
                <input type="number" name="tuna" value="0">
                <button>Order</button>
            </div>
        </div>
        <div class="single-menu">
            <img src = "img/salmon.jpg" alt="">
            <div class="menu-content">
                <h4>Salmon Sashimi <span> $2</span></h4>
                <p>Salmon</p>
                <input type="number" name="salmon" value="0">
                <button>Order</button>
            </div>
        </div>
        <div class="single-menu">
            <img src = "img/hot_Tea.jpg" alt="">
            <div class="menu-content">
                <h4>Hot Tea <span> $1</span></h4>
                <p>Green Tea, Black Tea</p>
                <input type="number" name="hot_tea" value="0">
                <button>Order</button>
            </div>
        </div>
        <div class="single-menu">
            <img src = "img/iced_tea.jpg" alt="">
            <div class="menu-content">
                <h4>Iced Tea <span> $1</span></h4>
                <p>Sweetened, Unsweetened</p>
                <input type="number" name="iced_tea" value="0">
                <button>Order</button>
            </div>
        </div>
    </div>
  </form>
</div>

<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Your Order</span>
              <span class="section-heading-lower">Details</span>
            </h2>
            <table class="table">
              <thread>
                <tr>
                  <th scope="col">Item Name</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Price</th>
                </tr>
              </thread>
              <tbody>
                <tr>
                  <th scope="row">Steamed Edamame</th>
                  <td><?php echo($edamame); ?></td>
                  <td><?php echo($edamame * 8); ?></td>
                </tr>
                <tr>
                  <th scope="row">Shishito Peppers</th>
                  <td><?php echo($peppers); ?></td>
                  <td><?php echo($peppers * 12); ?></td>
                </tr>
                <tr>
                  <th scope="row">Tuna Sashimi</th>
                  <td><?php echo($tuna); ?></td>
                  <td><?php echo($tuna * 2.50); ?></td>
                </tr>
                <tr>
                  <th scope="row">Salmon Sashimi</th>
                  <td><?php echo($salmon); ?></td>
                  <td><?php echo($salmon * 2); ?></td>
                </tr>
                <tr>
                  <th scope="row">Hot Tea</th>
                  <td><?php echo($hot_tea); ?></td>
                  <td><?php echo($hot_tea * 1); ?></td>
                </tr>
                <tr>
                  <th scope="row">Iced Tea</th>
                  <td><?php echo($iced_tea); ?></td>
                  <td><?php echo($iced_tea * 1); ?></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>



<?php
                       $mysqli = new mysqli("3.89.186.66", "team1", "password_XZC_1", "team1_db"); 
                       
                        // Check connection
                        if($mysqli === false){
                            die("ERROR: Could not connect. " . $mysqli->connect_error);
                        }


                     // $sql = "INSERT INTO customer"

                       //$sql = "INSERT INTO customer (first_name, last_name, phone_number) VALUES ('$first_name', '$last_name', '$phone_number')"; 
                       //if ($mysqli->query($sql) === TRUE){
                       // $last_id = $mysqli->insert_id;
                     //   echo "New record created successfully. Last inserted ID is: " . $last_id;
                      // }
                      // $sql = "INSERT INTO reservation (id_customer, hour, number_of_people, res_day) VALUES ($last_id, $hour, $number_of_people, '$day')";
                       
                       //if($mysqli->query($sql) === true){
                        //echo "Records inserted successfully.";
                        //} else {
                        //echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                       // }
                    ?>







    
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

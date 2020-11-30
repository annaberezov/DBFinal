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
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="reservation.php">Make a Reservation</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<?php
$hour = $first_name = $last_name = $phone_number = $number_of_people = $day = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $day = test_input($_POST["day"]);
    $hour = test_input($_POST["hour"]);
    $first_name = test_input($_POST["first_name"]);
    $last_name = test_input($_POST["last_name"]);
    $phone_number = test_input($_POST["phone_number"]);
    $number_of_people = test_input($_POST["number_of_people"]);
}
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

?>
<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/reserve.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Visit us</span>
                <span class="section-heading-lower">Make a Reservation</span>
                </h2>
                      <div class="card-content">
                            <form method = "post">
                	            <div class="for-row">
                                <select name="day" value="Sunday">
                                         <option value="day-select">Select Day</option>
                                         <option value="Sunday">Sunday</option>
                                         <option value="Monday">Monday</option>
                                         <option value="Tuesday">Tuesday</option>
                                         <option value="Wednesday">Wednesday</option>
                                         <option value="Thursday">Thursday</option>
                                         <option value="Friday">Friday</option>
                                         <option value="Saturday">Saturday</option>
                                     </select>
                                     <select name="hour" value="1600">
                                            <option value="hours-select">Select Hour</option>
                                            <option value="1600">16:00</option>
                                            <option value="1700">17:00</option>
                                            <option value="1800">18:00</option>
                                            <option value="1900">19:00</option>
                                            <option value="2000">20:00</option>
                                     </select>
                                </div>

                               <div class ="form-row">
                                        <input type="text" name="first_name" placeholder="First Name" value="First Name">
                                        <input type="text"placeholder="Last Name" name="last_name" value="Last Name">
                                        <input type="text"placeholder="Phone Number" name="phone_number" value="1234567890">
                               </div>

                               <div class="form-row">
                                    <input type="number"placeholder="How many persons?" min="1" name="number_of_people" value="1">
                                    <input type="submit"value="BOOK TABLE">

                              </div>
                            </form>
                         </div>
                      </div>

                    <?php
                       $mysqli = new mysqli("3.89.186.66", "team1", "password_XZC_1", "team1_db"); 
                       
                        // Check connection
                        if($mysqli === false){
                            die("ERROR: Could not connect. " . $mysqli->connect_error);
                        }

                       $sql = "INSERT INTO customer (first_name, last_name, phone_number) VALUES ('$first_name', '$last_name', '$phone_number')"; 
                       if ($mysqli->query($sql) === TRUE){
                        $last_id = $mysqli->insert_id;
                     //   echo "New record created successfully. Last inserted ID is: " . $last_id;
                       }
                       $sql = "INSERT INTO reservation (id_customer, hour, number_of_people, res_day) VALUES ($last_id, $hour, $number_of_people, '$day')";
                       
                       //if($mysqli->query($sql) === true){
                        //echo "Records inserted successfully.";
                        //} else {
                        //echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                       // }
                    ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; HAY Sushi</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Script to highlight the active date in the hours list
    <script>
      $('.list-hours li').eq(new Date().getDay()).addClass('today');
    </script> -->

  </body>

</html>
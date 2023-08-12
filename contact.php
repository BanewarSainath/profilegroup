<!DOCTYPE html>
<html lang="en">

<head>

  <link rel="stylesheet" href="./css/contact.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SK construction</title>
  <link rel="stylesheet" href="/skconstruction/css/home.css">
  <link rel="stylesheet" href="bootstrap.css">
  <script type="text/javascript" src="/skconstruction/js/jquery.min.js"></script>
  <script type="text/javascript" src="/skconstruction/js/bootstrap.js"></script>

</head>

<body>
  <div class="headbar"><a class="mail" href="mailto:sainathbanewar@gmail.com"> adeshalitkar@gmail.com
    </a>&nbsp;&nbsp;&nbsp;
    <a class="call" href="tel:+919022169776">9022169776</a>
  </div>

  <div class="topbar">

    <a class="navbar-brand " href="home.php"><img class="img-fluid" src="Screenshot (201).png" alt="logo"></a>





    <nav class="navbar offset-md-1">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link mr-md-4" href="http://localhost/skconstruction/home.php">Home <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-md-4 " href="http://localhost/skconstruction/about.php">about</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle mr-md-4" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Projects
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://localhost/skconstruction/our_projects/residensial/residencial.php">Recidensial</a>
                <a class="dropdown-item" href="http://localhost/skconstruction/our_projects/commercial/commercial.php">comercial</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="http://localhost/skconstruction/our_projects/indestrial/industrial.php">industrial</a>
                <a class="dropdown-item" href="http://localhost/skconstruction/our_projects/goverment/gov.php">goverment</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled mr-md-4"
                href="http://localhost/skconstruction/testimonial.php">Testimonials</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled  mr-md-4" href="http://localhost/skconstruction/contact.php">Contact Us</a>
            </li>
          </ul>

        </div>
        <form class="form-inline my-2 my-lg-0 ml-md-4   mr-md-4">

          <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">Enquiry</button>
        </form>

      </nav>

    </nav>

  </div>
  </div>









  <div id="login-box">
    <div class="leftbox">
      <h1>Contact Us</h1>
      <form class="cform" method="post" action="contact.php">
        <input type="text" id="name" name="username" placeholder="name" required>
        <input type="text" id="phone" name="phone" placeholder="Phone no" required>
        <input type="text" id="mail" name="email" placeholder="E-mail" />


        <textarea name="message" id="msg" placeholder="How can we Help YOU"></textarea>

        <input type="submit" name="signup_submit" value="Submit" />
    </div>

    <!--<div class="rightbox">
    
    
    <button class="facebook">Log in with Facebook</button>
    <button class="google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>-->
  </div>
  </form>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['username'];
        $email = $_POST['email'];

        $phone = $_POST['phone'];
        $msg = $_POST['message'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "trycontact";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `try_contact` (`name`, `email`, `phone`, `querie`) VALUES ('$name', '$email', '$phone', '$msg')";
        $result = mysqli_query($conn, $sql);
 
        if($result){
          echo '<script> alert("we will contact you shortly !")</script>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<script>alert("Sorry ! can you please try after some time!")</script>';
        }

      }
      

    }

    
?>
  <script>
    console.log
  </script>







  <footer>
    <div>&copy; Copyright SK construction &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
      All rights are reserved</div>
  </footer>




</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Chelsea+Market&family=Nunito+Sans:ital,wght@1,600&family=Ubuntu&family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <title>Home tutor</title>
</head>

<body >
    <!-- ----------------------------  Navigation ---------------------------------------------- -->
    <div class=" container-fluid header-2">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="index.php">Home Tutor</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active ">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="AboutUs.html">About US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutor/registration.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutor/report.html">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php

if(isset($_POST['submit'])){
  $search = $_POST['search'];

  $connection=mysqli_connect('localhost','root','','registration');
  if(!$connection)
  {
    die("NOT CONNECTED");
  }

  $query = "SELECT * FROM tutor WHERE pin LIKE '%$search%' ";
  $search_query = mysqli_query($connection, $query);

  if(!$search_query) {

      die("QUERY FAILED" . mysqli_error($connection));

  }
  else
  {
      $count = mysqli_num_rows($search_query);
      if($count==0)
      {
        echo "<h1 class='noresult'>No result</h1>";
      }
      else
      {
        while($row = mysqli_fetch_assoc($search_query))
        {
          $name = $row['name'];
          $subject= $row['field'];
          $price = $row['price'];
          $phn = $row['phone'];
          $email =$row['email'];
          ?>

         <div class="card">
            <img src="img_avatar.png" alt="John" style="width:100%">
            <div class="padd">
                <h1 class="name"><?php echo $name ?></h1>
                <p class="title11"><?php echo $subject ?></p>
                <p class="something"><?php echo $email ?></p>
            </div>


            <p><button class="buttonnn"><?php echo $phn ?></button></p>
        </div>

          <?php
        }
      }
    }
      }

?>
    </div>
    <!-- navigation -->

    <div class="blank ">


    </div>
    <!-- footer -->
    <footer class="footer ">
        <div class="container-fluid row ">
            <div class=" about-us col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">About Us</h2>
                <p class="brief-footer "> i am iitian</p>
            </div>
            <div class=" newsletter col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">Newsletter</h2>
                <p class="brief-footer ">
                    We are awesome.
                </p>
            </div>
            <div class="Register col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">Register</h2>
                <p class="brief-footer ">Register as student</p>
                <p class="brief-footer ">Register as tutor</p>
            </div>
            <div class=" contact-us col-lg-3 col-md-6 col-sm-12 ">
                <h2 class="footer-font ">CONTACT US</h2>
                <p class="brief-footer ">
                    Lets us be social
                </p>
                <div>
                    <i class="fab fa-facebook fab-color "></i>
                    <i class="fab fa-youtube fab-color "></i>
                    <i class="fab fa-twitter fab-color "></i>
                    <i class="fab fa-instagram fab-color "></i>
                </div>
            </div>

        </div>
        <h4 class="copyright ">
            Copy Right
        </h4>
    </footer>
    <!-- footer -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js " integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj " crossorigin="anonymous "></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js " integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js " integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV " crossorigin="anonymous "></script>
</body>

</html>

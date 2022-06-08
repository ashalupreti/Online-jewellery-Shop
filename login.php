<?php

$con = mysqli_connect('localhost', 'root');

// if($con){
// 	echo "Connection successful";
//  }
//  else{
//  	echo "No connection";
//  }
mysqli_select_db($con, 'ashal');

if (isset($_POST['username'])) {
  $name = $_POST['username'];
  $password = $_POST['password'];
  $query = "select * from login where USER='" . $name . "' AND PASSWORD='" . $password . "' limit 1";

  $result = mysqli_query($con, $query);

  if (mysqli_num_rows($result) == 1) {
    echo "You have successfully logged in";
    //  exit();
    header('location:display.php');
  } else {
    echo "Incorrect password";
    exit();
  }
}

?>



<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>

<body>
  <div>
    <nav>
      <img src="designs/logo.jpg" alt="logo" width="150px">
      <ul>
        <li><a href="index.php">Home</a></li>

      </ul>

    </nav>
    <!-- <img src="designs/menu.png" class="menu-icon"> -->
  </div>

  <!-- </div> -->
  <!-- navbar section ends here -->


  <section class="login">
    <h1>Admin Login</h1>
    <div>
      <form action="#" method="post">
        <div>
          <input type="text" name="username" placeholder="Enter your User Name">
        </div>
        <div>
          <input type="password" name="password" placeholder="Enter your Password">
        </div>
        <input type="submit" name="submit" value="LOGIN">
      </form>
    </div>
  </section>
  <!-- Footer section begins here -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-cols-1">
          <h3>Download Our App</h3>
          <p>Download App for Andriod and ios mobile phone</p>
          <div class="app-logo">

            <img src="designs/app-store.png">
            <img src="designs/play-store.png">
          </div>
        </div>
        <div class="footer-cols-2">
          <img src="designs/logo.jpg">
          <p>Download App for Andriod and ios mobile phone</p>
        </div>
        <div class="footer-cols-3">
          <h3>Follow Us on</h3>
          <!-- Social media section -->
          <div class="socialmedia">
            <img src="designs/facebook.png"></a>
            <img src="designs/instagram.png"> </a>
            <img src="designs/twitter.png">
            <img src="designs/youtube.jpg">
          </div>
        </div>
      </div>
      <hr>
      <!-- Copright section -->
      <p class="copyright">© 2022 License ashal jewellery. All rights reserved.</p>
    </div>
  </div>
</body>

</html>
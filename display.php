<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <nav>
    <img src="designs/logo.jpg" alt="logo" width="150px">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="addrate.php">Rate</a></li>

    </ul>
  </nav>

  <section class="table">

    <table border="3">
      <tr>
        <th>id</th>
        <th>user</th>
        <th>email</th>
        <th>mobile</th>
        <th>address</th>
        <th>code</th>
        <th>interested on</th>
        <th>image</th>
        <th>comment</th>
      </tr>
      <tbody>
        <?php
        $con = mysqli_connect('localhost', 'root');
        mysqli_select_db($con, 'ashal');

        $selectquery = "select * from userinfodata";
        $query = mysqli_query($con, $selectquery);
        //  $data=mysqli_fetch_array($query);
        while ($data = mysqli_fetch_array($query)) {
        ?>
          <tr>
            <td><?php echo $data['id']; ?> </td>
            <td><?php echo $data['user']; ?> </td>
            <td><?php echo $data['email']; ?> </td>
            <td><?php echo $data['mobile']; ?> </td>
            <td><?php echo $data['address']; ?> </td>
            <td><?php echo $data['code']; ?> </td>
            <td><?php echo $data['interestedon']; ?> </td>
            <td><img src="<?php echo $data['image']; ?>" width="100" height="50"> </td>
            <td><?php echo $data['comment']; ?> </td>

          </tr>
        <?php
        }
        ?>

      </tbody>
    </table>

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
      <p class="copyright">© 2023 License Shakya jewellery. All rights reserved.</p>
    </div>
  </div>


</body>

</html>
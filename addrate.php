<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Project</title>
	<link rel="stylesheet" href="style.css">
	<!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet"> -->
</head>

<body>

	<nav>
		<img src="designs/logo.jpg" alt="logo" width="150px">
		<ul>
			<li><a href="index.php">Home</a></li>

		</ul>
	</nav>

	<!-- Form part starts here -->

	<section class="rate">
		<h1>Today's Rate</h1>
		<div>
			<form action="#" method="post">
				<div>
					<h2>Date</h2>
					<input type="date" name="date" autocomplete="off">

				</div>
				<div>
					<h2>Gold</h2>
					<input type="number" name="gold" autocomplete="off">

				</div>
				<div>
					<h2>Silver</h2>
					<input type="number" name="silver" autocomplete="off">
				</div>
				<div>


					<div>
						<button type="submit" name="submit">Submit</button>
					</div>

			</form>

		</div>
	</section>
	<!-- Form part ends here -->

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
					<!-- <ul>
<li>Facebook</li>
<li>Instagram</li>
<li>Twitter</li>
<li>Youtube</li>
</ul> -->
					<div class="socialmedia">
						<img src="designs/facebook.png">
						<img src="designs/instagram.png">
						<img src="designs/twitter.png">
						<img src="designs/youtube.jpg">
					</div>
				</div>
			</div>
			<hr>
			<p class="copyright">© 2023 License Shakya jewellery. All rights reserved.</p>
		</div>
	</div>
</body>

</html>

<?php

$con = mysqli_connect('localhost', 'root');


mysqli_select_db($con, 'ashal');

if (isset($_POST['submit'])) {

	$date = $_POST['date'];
	$gold = $_POST['gold'];
	$silver = $_POST['silver'];


	$query = "insert into rate(Date, Gold, Silver) values('$date', '$gold', '$silver')";

	echo "$query";
	mysqli_query($con, $query);
	header('location:display.php');
} else {
	echo "No button has been clicked";
}



?>
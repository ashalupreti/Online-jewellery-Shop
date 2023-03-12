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
	<script type="text/javascript">
		function check_id() {
			var format = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"
			var x = document.getElementById('emailid').value;
			if (!x.match(format))

			{
				alert("Incorrect email");
				return false;
			}
		}
	</script>
	<!-- Form part starts here -->

	<section class="form">
		<h1>Register Form</h1>
		<div>
			<form action="userinfo.php" method="post" enctype="multipart/form-data">
				<div>
					<h2>Full Name</h2>
					<input type="text" name="user" autocomplete="off" placeholder="Ashal Upreti">

				</div>
				<div>
					<h2>Email Id</h2>
					<input type="text" name="email" autocomplete="off" placeholder="Ashalupreti@gmail.com" id="emailid">

				</div>
				<div>
					<h2>Mobile No</h2>
					<input type="text" name="mobile" autocomplete="off" placeholder="9865480193">
				</div>
				<div>
					<h2>Address</h2>
					<input type="text" name="address" autocomplete="off" placeholder="Khopasi">
				</div>
				<div>
					<h2>Product Code</h2>
					<input type="text" name="code" autocomplete="off" placeholder="eg.#01 For Necklace">
				</div>
				<div>
					<h2>Interested on</h2>
					<select name="jewellery">
						<option value=""></option>
						<option value="Necklace">Necklace</option>
						<option value="Bangles">Bangles</option>
						<option value="Bracelets">Bracelets</option>
						<option value="Rings">Rings</option>
						<option value="Ear Rings">Ear Rings</option>
						<option value="Naugedi">Naugedi</option>
						<option value="Chandrama">Chandrama</option>
						<option value="Anklets">Anklets</option>
						<option value="Mangalsutra">Mangalsutra</option>
					</select>
				</div>
				<div>
					<h2>Upload your own design(if any)</h2>
					<input type="file" name="image" autocomplete="off">
				</div>
				<div>
					<h2>Comments</h2>
					<textarea name="comments">
				</textarea>
				</div>
				<div>
					<button type="submit" name="upload" onclick="check_id()">Submit</button>
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

					<div class="socialmedia">
						<img src="designs/facebook.png">
						<img src="designs/instagram.png">
						<img src="designs/twitter.png">
						<img src="designs/youtube.jpg">
					</div>
				</div>
			</div>
			<hr>
			<p class="copyright">© 2022 License Shakya jewellery. All rights reserved.</p>
		</div>
	</div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>
	<link rel="stylesheet" href="css/Style1.css">
	<link rel="stylesheet" href="css/reset.css">
	<meta name="viewport" content="width=devicew-idth,initial-scale=1.0"> 
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> <!-- fontawesome -->
	<!-- <meta http-equiv="refresh" content="3"> -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet"> <!-- font-family -->
	<link href="https://fonts.googleapis.com/css?family=Indie+Flower|Monoton" rel="stylesheet"> <!-- font-family -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<div class="Navigation">
				<div class="container">
					<div class="title">
						<a href="#"><h3>LA Casa</h3></a>
					</div>
					<div class="rm">
						<div class="Menu">
							<ul>
								<li><a href="#">Buy</a></li>
								<li><a href="#">Rent</a></li>
								<li><a href="#">Sell</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</div>
						<a href="#" class="button_btn">Login</a>
					</div>
				</div>
			</div>
	</header>
	<main>
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<img  src="http://pixelhint.com/demo/la_casa/img/property_2.jpg" alt="No iMG" alt="Error!" style="height: 665px; width:600px;">
				</div>
				<div class="col-md-5">
					<h4 class="tp">Luxury apartments in washington</h4>
				<div>
				  <form action="/action_page.php">
					    <label for="fname">Name</label>
					    <input type="text" id="fname" name="firstname" placeholder="Your name..">


					    <label for="country">Country</label>
					    <select id="country" name="country">
					      	<option value="australia">Australia</option>
					      	<option value="canada">Canada</option>
					      	<option value="usa">USA</option>
					    </select>

					    <label for="lname">Your Phone</label>
					    <input type="text" id="lPhone" name="Phone" placeholder="Your Phone..">
					    <label for="lname">Address</label>
					    <input type="text" id="Address" name="Address" placeholder="Your Address..">
						<label for="country">payment methods</label>
					    <select id="method" name="Payment Methods">
					      	<option value="Visa">Visa</option>
					      	<option value="Paypal">Paypal</option>
					    </select>
					  	<label for="lname">Enter the card code</label>
					    <input type="text" id="code" name="Code" placeholder="Your Code..">
					    <input type="submit" value="BUY HOUSE">
				  </form>
</div>
				</div>
			</div>
		</div>
	</main>
</body>
</html>
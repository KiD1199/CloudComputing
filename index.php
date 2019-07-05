<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ATN</title>
	<link rel="stylesheet" href="css/Style.css">
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
		<header>	<!-- star end -->				
			<div class="Navigation">
				<div class="container">
					<div class="title">
						<a href="#"><h3 class="tit">ATN</h3></a>
					</div>
					<div class="rm">
						<div class="Menu">
							<ul>
								<li><a href="/InsertData.php">Insert</a></li>								
								<li><a href="/UpdateData.php">Update</a></li>
								<li><a href="/DeleteData.php">Delete</a></li>
								
							</ul>
						</div>
						<a href="/ConnectToDB.php" class="button_btn">View</a>
					</div>
				</div>
			</div>
			<div class="caption">
				<h2>Where will store all your data</h2>
			</div>
			
			
		<!-- collapse -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="brand">
						<h2>WHAT ARE YOU LOOKING FOR ?</h2>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icol">
						<span>
							<a href="#" data-toggle="collapse" data-target="#mimi"><i class="fas fa-cog"></i></a>
						</span>
					</div>
				</div>
			</div>
			<div class="collapse" id="mimi">
					<table class="table">				
						<tbody>
							<tr>								
								<td>checking in date<span class="span"></span></td>
								<td>checking out date</td>
							</tr>
							<tr>								
								<td>min.price</td>
								<td>max.price</td>
							</tr>
							<tr>								
								<td>keywords</td>
								<td></td>
							</tr>
						</tbody>
				</table>	
			</div>	
		</div><!--  end collapse -->
		</header> <!-- end header -->
</body>
</html>
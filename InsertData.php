<!DOCTYPE html>
<html>
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
						<a href="/index.php"><h3>ATN</h3></a>
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
	</header>
    <head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {
list-style: none;
}
</style>
</head>
<body style='background-color:#C0C0C0'>
<div align="center">
<h1>INSERT DATA TO DATABASE</h1>
	<h2>Enter data into produce table</h2>
	<ul>
	    <form name="InsertData" action="InsertData.php" method="POST" >
	<li>NameID:</li><li><input type="text" name="NameID" /></li>
	<li>NameCustomer:</li><li><input type="text" name="NameCustomer" /></li>
	<li>Price:</li><li><input type="text" name="Price" /></li>
	<li><input type="submit" value="Save" /></li>
		</form>
	</ul>

<?php

if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     
   $db = parse_url(getenv("DATABASE_URL"));
   $pdo = new PDO("pgsql:" . sprintf(
        "host=ec2-54-163-230-199.compute-1.amazonaws.com;port=5432;user=wzecufpvxidlrx;password=31a13419dfe44812f95e84b3dba3efa5a652d7896f49c18700e818d8657b40ff;dbname=d4cebf8vq0o8l2",
        $db["host"],
        $db["port"],
        $db["user"],
        $db["pass"],
        ltrim($db["path"], "/")
   ));
}  

if($pdo === false){
     echo "ERROR: Could not connect Database";
}

//Khởi tạo Prepared Statement
//$stmt = $pdo->prepare('INSERT INTO student (stuid, fname, email, classname) values (:id, :name, :email, :class)');

//$stmt->bindParam(':id','SV03');
//$stmt->bindParam(':name','Ho Hong Linh');
//$stmt->bindParam(':email', 'Linhhh@fpt.edu.vn');
//$stmt->bindParam(':class', 'GCD018');
//$stmt->execute();
//$sql = "INSERT INTO student(stuid, fname, email, classname) VALUES('SV02', 'Hong Thanh','thanhh@fpt.edu.vn','GCD018')";
$sql = "INSERT INTO database(nameid, namecustomer, price)"
        . " VALUES('$_POST[NameID]','$_POST[NameCustomer]','$_POST[Price]')";
$stmt = $pdo->prepare($sql);
//$stmt->execute();
 if (is_null($_POST[NameID])) {
   echo "NameID must be not null";
 }
 else
 {
    if($stmt->execute() == TRUE){
        echo "Record inserted successfully.";
    } else {
        echo "Error inserting record: ";
    }
 }
?>
</div>
</body>

	<div align="center">
<footer> <!-- star footer -->
			<div class="container">
				<hr>
				<div class="end-title">
					<li><a href="#" class="facebook"></a></li>
					<li><a href="#" class="twitter"></a></li>
					<li><a href="#" class="google"></a></li>
					<li><a href="#" class="skype"></a></li>
					<h5 align="center">Made by HaiTac <a href="https://www.facebook.com/gavcv">facebook.com</a>. Accomplished.</h5>
				</div>
			</div>
		</footer> <!-- end footer -->
	</div>
</body>
</html>

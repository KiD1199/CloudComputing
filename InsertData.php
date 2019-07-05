
<!DOCTYPE html>
<html lang="en">
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="InsertData.php" class="w3-bar-item w3-button w3-padding-large">Insert</a>
    <a href="UpdateData.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Update</a>
    <a href="DeleteData.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Delete</a>
    <a href="ConnectToDB.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">View</a>   
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>
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

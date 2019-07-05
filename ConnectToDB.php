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
<body style='background-color:#C0C0C0'>
<div align="center">

<h1>DATABASE CONNECTION</h1>

<?php
ini_set('display_errors', 1);
echo "Hello Cloud computing class 0818!";
?>
</div>
<?php


if (empty(getenv("DATABASE_URL"))){
    echo '<p>The DB does not exist</p>';
    $pdo = new PDO('pgsql:host=localhost;port=5432;dbname=mydb', 'postgres', '123456');
}  else {
     echo '<p>The DB exists</p>';
     echo getenv("dbname");
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

$sql = "SELECT * FROM database";
$stmt = $pdo->prepare($sql);
//Thiết lập kiểu dữ liệu trả về
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
$resultSet = $stmt->fetchAll();
echo '<p>Customer information:</p>';

?>
<div id="container">
<table class="table table-bordered table-condensed">
    <thead>
      <tr>
        <th>NameID</th>
        <th>NameCustomer</th>
        <th>Price</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // tạo vòng lặp 
         //while($r = mysql_fetch_array($result)){
             foreach ($resultSet as $row) {
      ?>
   
      <tr>
        <td scope="row"><?php echo $row['nameid'] ?></td>
        <td><?php echo $row['namecustomer'] ?></td>
        <td><?php echo $row['price'] ?></td>
        <td><?php echo $row['date'] ?></td>
        
      </tr>
     
      <?php
        }
      ?>
    </tbody>
  </table>
</div>
</body>
</html>

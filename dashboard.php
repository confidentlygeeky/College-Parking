 <?php


$servername = "localhost";
$username="root";
$password="";
$dbName = "parking";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


            $result = mysqli_query($conn,"select count(*)
                      from myTable
                      where status = 'booked'");

            $count = mysqli_fetch_array($result);
            echo $count[0];

            $result2 = mysqli_query($conn,"select count(*)
                      from myTable
                      where status = 'empty'");

            $count2 = mysqli_fetch_array($result2);
            echo $count2[0];

            $result3 = mysqli_query($conn,"select count(*)
                      from myTable
                      where name = 'handicap'");

            $count3 = mysqli_fetch_array($result3);
            echo $count3[0];

            $result4 = mysqli_query($conn,"select count(*)
                      from myTable
                      where name = 'faculty'");

            $count4 = mysqli_fetch_array($result4);
            echo $count4[0];


            $result5 = mysqli_query($conn,"select count(*)
                      from myTable
                      where name = 'student'");

            $count5 = mysqli_fetch_array($result5);
            echo $count5[0];


?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Parking</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
<div class="navbar-header">
	 	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	<a href="#" class="navbar-brand">Car Parking</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li ><a href="home.php">Home</a></li>
			<li class="active"><a href="dashboard.php">Dashboard</a></li>
			
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Sign Up  <i class="fas fa-user-plus"></i> </a></li>
				<li><a href="#">Login  <i class="fas fa-user"></i> </a></li>
				<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</nav>



<div align="center">
<br><br><br>

<table style="width:50%">
<h1>Summary</h1>
  <tr>
    <th>BOOKED</th>
    <th>OPEN</th>
    <th>HANDICAP</th>
    <th>FACULTY</th>
    <th>Student</th>
  </tr>
  <tr>
    
    
    <td><?php echo $count[0]; ?></td>
    <td><?php echo $count2[0]; ?></td>
    <td><?php echo $count3[0]; ?></td>
    <td><?php echo $count4[0]; ?></td>
    <td><?php echo $count5[0]; ?></td>
    
  </tr>
</table>
</div>
</body>

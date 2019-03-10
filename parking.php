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


?>
 <!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Car Parking</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="parking.css">
	 <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      #myDIV, #myDIV3, #myDIV5, #myDIV7, #myDIV9 {
 
  background-color: #ff3300;
  
}

#myDIV2, #myDIV4, #myDIV6,  #myDIV8 {
 
  background-color: #00cc00;
  
}


    </style>
 <link href="album.css" rel="stylesheet">

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
			<li><a href="home.php">Home</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
			
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<li><a href="#">Sign Up  <i class="fas fa-user-plus"></i> </a></li>
				<li><a href="#">Login  <i class="fas fa-user"></i> </a></li>
				<li><a href="#">Contact</a></li>
</ul>
</div>
</div>
</nav>

<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction2()">Book</button>
                   <button  onclick="myFunction()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV2">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  
                  <button onclick="myFunction4()">Book</button>
                   <button  onclick="myFunction3()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV3">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction6()">Book</button>
                   <button  onclick="myFunction5()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>


<div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction8()">Book</button>
                   <button  onclick="myFunction7()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV5">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction10()">Book</button>
                   <button  onclick="myFunction9()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV6">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction12()">Book</button>
                   <button  onclick="myFunction11()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV7">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction14()">Book</button>
                   <button  onclick="myFunction13()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV8">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction16()">Book</button>
                   <button  onclick="myFunction15()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
          	<div id="myDIV9">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><text x="50%" y="50%" fill="#eceeef" dy=".3em">Parking Spot</text></svg>
        </div>
            <div class="card-body">
              
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                	
                  <button onclick="myFunction18()">Book</button>
                   <button  onclick="myFunction17()">Free</button>
      
                </div>
              </div>
            </div>
          </div>
        </div>



<script
  src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
function myFunction() {
  document.getElementById("myDIV").style.backgroundColor = "#00cc00";
}

function myFunction2() {
  document.getElementById("myDIV").style.backgroundColor = "#ff3300";
}

function myFunction3() {
  document.getElementById("myDIV2").style.backgroundColor = "#00cc00";
}

function myFunction4() {

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


    mysqli_query($conn,"UPDATE myTable SET status='booked' WHERE parking_id='2'");

?>
  document.getElementById("myDIV2").style.backgroundColor = "#ff3300";

 

}

function myFunction5() {
  document.getElementById("myDIV3").style.backgroundColor = "#00cc00";
}

function myFunction6() {
  document.getElementById("myDIV3").style.backgroundColor = "#ff3300";
}

function myFunction7() {
  document.getElementById("myDIV4").style.backgroundColor = "#00cc00";
}

function myFunction8() {
  document.getElementById("myDIV4").style.backgroundColor = "#ff3300";

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


    mysqli_query($conn,"UPDATE myTable SET status='booked' WHERE parking_id='4'");
     


?>
}

function myFunction9() {
  document.getElementById("myDIV5").style.backgroundColor = "#00cc00";
}

function myFunction10() {
  document.getElementById("myDIV5").style.backgroundColor = "#ff3300";
}

function myFunction11() {
  document.getElementById("myDIV6").style.backgroundColor = "#00cc00";
}

function myFunction12() {
  document.getElementById("myDIV6").style.backgroundColor = "#ff3300";

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


    mysqli_query($conn,"UPDATE myTable SET status='booked' WHERE parking_id='6'");
     


?>
}

function myFunction13() {
  document.getElementById("myDIV7").style.backgroundColor = "#00cc00";
}

function myFunction14() {
  document.getElementById("myDIV7").style.backgroundColor = "#ff3300";
}

function myFunction15() {
  document.getElementById("myDIV8").style.backgroundColor = "#00cc00";
}

function myFunction16() {
  document.getElementById("myDIV8").style.backgroundColor = "#ff3300";

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


    mysqli_query($conn,"UPDATE myTable SET status='booked' WHERE parking_id='8'");
     


?>
}

function myFunction17() {
  document.getElementById("myDIV9").style.backgroundColor = "#00cc00";
}

function myFunction18() {
  document.getElementById("myDIV9").style.backgroundColor = "#ff3300";
}

</script>

</body>

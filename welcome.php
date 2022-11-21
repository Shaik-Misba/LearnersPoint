<!DOCTYPE html>
<html>
<head>
	<title>WELCOME</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto|Sansita">
</head>
<style>
	.con{
		width: 20%;
		background-color: blue;
		border:0 5px 0 0 solid black;
		height: 580px;
	}
	.cont{
		width: 80%;
	}
	.body-container{
		display: flex;
		height: 580px;
	}

	}
	!important a{
		
		
		color: white;
	}
	.header{
		height: 60px;
		display: flex;
		align-items: center;
	}
	.profile{
		margin-left: 60%;
	}
	.d{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.wecome{
		font-family: "Bitstream Vera Serif", serif;
	}
	li:hover{
		background-color: skyblue;
	}
</style>
<body>
	<div class="body-container bg-primary header ps-3 bg-opacity-50 border border-dark border-bottom-3">
		<img src="logo.png" height="60px" width="70px" class="me-3">
		<h2>Learners Point</h2>
		<h3 class="profile"></h3>
	</div>
	<div class="body-container">
	<section class="con bg-primary bg-opacity-25">	
		<nav class="nav flex-column" >
			<ul class="navbar-nav mt-3">
				<li class="nav-item ps-5"><a href="welcome.php" class="nav-link active text-dark bi-list">	DashBoard</a></li>
				<li class="nav-item ps-5 "><a href="python.html" class="nav-link text-dark bi-filetype-py"> Python</a></li>
				<li class="nav-item ps-5 "><a href="java.html" class="nav-link text-dark bi-cup-hot-fill"> Java</a></li>
				<li class="nav-item ps-5 "><a href="C++.html" class="nav-link text-dark bi-c-circle"> C++</a></li>
				<li class="nav-item ps-5 "><a href="DSA.html" class="nav-link text-dark bi-diagram-3-fill"> DSA</a></li>
				<li class="nav-item ps-5 "><a href="WEB TECH.html" class="nav-link text-dark bi-browser-edge"> Web Technologies</a></li><br>
				<li class="nav-item ps-5 mb-2"><a href="GIT.html" class="nav-link text-dark bi-github"> Git & GitHUb</a></li><br>
				<li class="nav-item btn btn-info w-75 ms-4 p-0 rounded-pill"><a href="home.html" class="nav-link text-dark">Logout</a></li>
			</ul>
		</nav>
	</section>
	<section class="cont">
		<div class="container d" style="height: 100%">
			<div class="welcome">
				<img src="congract.png">
				<h2 style="text-align: center;">Welcome! <?php session_start();  echo  $_SESSION['uname'];?></h2>
				<h3>Congratulations!  You took 1st Step towards your future.</h3>
			</div>
		</div>
	</section>
	</div>
</div>
</body>
</html>

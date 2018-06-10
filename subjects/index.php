<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subjects</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="../css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="subjects.css">
</head>
<style>
  
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-dark info-color" style="opacity: 0.5s;">

<!-- Navbar brand -->
<a class="navbar-brand" href="#" style="font-weight: bold">Iam A Writer</a>

<!-- Collapse button -->
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<!-- Collapsible content -->
<div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mx-auto">
        <li class="nav-item ">
            <a class="nav-link waves-effect waves-light" href="../">Home </a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="../#about">About Us</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-effect waves-light" href="../#contact">Contact Us</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link waves-effect waves-light" href="">The Subjects</a>
            <span class="sr-only">(current)</span>
        </li>
        <!-- Dropdown -->
        <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">More</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item waves-effect waves-light" href="auth/index.php">Login</a>
                            <a class="dropdown-item waves-effect waves-light" href="#">Help</a>
        
                        </div>
                    </li> -->

    </ul>
</div>
<!-- Collapsible content -->

</nav>

  <div class="container">
	<div class="row">
		<div class="col-md-6">
            <form class="form-inline" style="margin-bottom: 0px;padding-bottom: 0px;">
                <div class="md-form my-0">
                    <div class="waves-input-wrapper waves-effect waves-light">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </div>
            </form>
		</div>
		<div class="col-md-6 sort">
			<!-- <select class="custom-select-md float-right">
				<option>Sort</option>
				<option>Philosophy</option>
            </select> -->
            <!-- Basic dropdown -->
            <div class="btn-group float-right">
                <div style="margin-right: 10px">
                <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Grid View">
                     <i class="fa fa-th"></i>
                </button>
                </div>
                <div>
                    <button class="btn btn-sm btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort</button>
                    
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Philosophy</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="#">Geography</a>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2">
			<h3>Subjects</h3>
			<hr>
			<ul class="nav navbar-nav">
				<li class="subject-item actived"><a href="">All</a></li>
				<li class="subject-item"><a href="">Starred</a></li>
				<li class="subject-item"><a href="">PDF</a></li>
				<li class="subject-item"><a href="">DOC</a></li>
				<li class="subject-item"><a href="">PPT</a></li>
			</ul>
		</div>
		<div class="col-md-10">
              
            <div class="row">
            <?php
            include '../class/conn.php';
            $qry = "SELECT * FROM `subjects`";
            $exec_qry = mysqli_query($connecting,$qry)or die(mysqli_error()); 
            while ($result = mysqli_fetch_assoc($exec_qry)) {
            ?>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-img">
                            <!-- <img src="../img/maxresdefault.jpg" class="img-fluid" /> -->
                            <img src="../dashboard/uploads/<?php echo $result['subject_file'] ?>" alt="<?php echo $result['subject_file'] ?>" title="<?php echo $result['subject_file'] ?>" class="img-fluid">
                        </div>
                        <div class="card-body">
                             <p class="text-muted" ><?php echo $result['subject_name'] ?></p>
                            <hr>
                            <h6>Posted : <?php echo $result['date_uploaded'] ?></h6>
                            <div>
                                <button class="btn btn-sm btn-info float-left" style="margin: 0px"><i class="fa fa-eye"></i></button>
                                <a href="download.php?id=<?php echo $result['subject_id'] ?>" class="btn btn-sm info-color-dark float-right"  style="margin: 0px"><i class="fa fa-download"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php

        }
        ?>
            </div>
        </div>
</div>
</div>
<footer class="page-footer" style="padding-top: 5px">
    <div class="info-color">
        <div class="container-fluid container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="center">About Iam A Writer</h3>
                    <hr style="background-color: whitesmoke">
                    <ul class="navbar-nav nav">
                        <li>
                            <a href="/about">Company Information</a>
                        </li>
                        <li>Privacy Policy</li>
                        <li>Terms of use</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Social</h3>
                    <hr style="background-color: whitesmoke">
                    <p> Stay up-to-date through our social media channels:</p>
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="https://www.facebook.com/" style="background-color: transparent" class=" waves-effect waves-light">
                                <i class="fa fa-facebook" style="margin-right: 10px"></i>Facebook</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.twitter.com/" style="background-color: transparent" class=" waves-effect waves-light">
                                <i class="fa fa-twitter" style="margin-right: 10px"></i>Twitter</a>
                        </li>
                        <li class="nav-item">
                            <i class="fa fa-instagram" style="margin-right: 10px"></i>Instagram</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Important Links</h3>
                    <hr style="background-color: whitesmoke">
                    <ul>
                        <li>
                            <a href="#!">Products</a>
                        </li>
                        <li>
                            <a href="#!">FAQ</a>
                        </li>
                        <li>
                            <a href="#!">Business Partnerships</a>
                        </li>
                        <li>
                            <a href="#!">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container-fluid info-color-dark">
            <p>All Rights Reserved |&copy; 2018 | Iam A Writer</p>
        </div>
    </div>
</footer>
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
</body>
</html>

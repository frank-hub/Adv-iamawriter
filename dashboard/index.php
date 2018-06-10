<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
</head>

<body class="grey lighten-3">
<?php
include '../class/conn.php';
session_start();
// include('../login/auth.php');

if (isset($_SESSION['username'])) {
$user =  $_SESSION['username'];

}
else {
    header("location:../login/");
}
?>
    <!--Main Navigation-->
    <header>

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="" target="_blank">
                    <strong class="blue-text">MDB</strong>
                </a>

                <!-- Collapse -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="" target="_blank">About MDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="" target="_blank">Free download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="" target="_blank">Free tutorials</a>
                        </li>
                    </ul>
                </div>
                <div class="ml-auto">
                <?php echo $_SESSION['username']; ?>
                <a href="../class/logout.php" class="btn btn-sm btn-primary">
                 <i class="fa fa-sign-out"></i> Logout
                 </a>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Sidebar -->
        <div class="sidebar-fixed position-fixed" style="background-image : url(img/sample.jpg);">

            <a class="logo-wrapper waves-effect">
                <!-- <img src="https://mdbootstrap.com/img/logo/mdb-email.png" class="img-fluid" alt=""> -->
                <h4 class="text-white" style="font-weight: bold" >Iam A Writer</h4>
            </a>

            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="add_subject.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-book mr-3"></i>The Subjects</a>
                <a href="about_update.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-table mr-3"></i>About</a>
                <a href="portfolio_update.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-map mr-3"></i>Portifolio</a>
                <a href="#" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-money mr-3"></i></a>
                <a href="#" class="list-group-item list-group-item-action waves-effect"></a>
                <a href="#" class="list-group-item list-group-item-action waves-effect"></a>
                <a href="#" class="list-group-item list-group-item-action waves-effect"></a>
            </div>

        </div>
        <!-- Sidebar -->

    </header>

    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="row flex-center text-white">
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body danger-color">
                            <div class="row">
                            <div class="col-sm-6">
                                <h2 style="font-weight: bold">25</h2>
                            </div>
                            <div class="col-sm-6">
                                <h3><i class="fa fa-book wow zoomIn"   data-wow-delay="0.6s"></i></h3>
                            </div>
                             Free Books
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body warning-color">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 style="font-weight: bold">0</h2>
                                </div>
                                <div class="col-sm-6">
                                    <h3>
                                        <i class="fa fa-usd wow zoomIn" data-wow-delay="0.6s"></i>
                                    </h3>
                                </div>
                                Onsale Books
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body info-color">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2 style="font-weight: bold">12</h2>
                                </div>
                                <div class="col-sm-6">
                                    <h3>
                                        <i class="fa fa-eye wow zoomIn" data-wow-delay="0.6s"></i>
                                    </h3>
                                </div>
                              Books Viewed
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="card">
                            <div class="card-body info-color-dark">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h2 style="font-weight: bold">16</h2>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3>
                                            <i class="fa fa-download wow zoomIn" data-wow-delay="0.6s"></i>
                                        </h3>
                                    </div>
                                    Downloads
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- the books table -->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Date Posted</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $qrys = "SELECT * FROM `subjects`";
                        $exec  = mysqli_query($connecting,$qrys);
                        while ($result = mysqli_fetch_array($exec)) {
                            $id = $result['subject_id'];
                            ?>
                            <tr>
                            <td><?php echo $result['subject_name'] ?></td>
                            <td><?php echo $result['date_uploaded'] ?></td>
                            <td><?php echo $result['subject_cat'] ?></td>
                            <td><?php echo $result['subject_file'] ?></td>
                            <td>
                                <button class="btn btn-sm btn-info " style="padding: 2px;margin: 0px">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                            <td>
                                    <button class="delete btn btn-sm btn-danger" id='del_<?= $id ?>' style="padding: 2px;margin: 0px">
                                        <i class="fa fa-trash"></i><span>
                                            Delete
                                        </span>
                                    </button>
                            </td>

                        </tr>
                        <?php
                            }   
                         ?>
                    </tbody>
                </table>
            </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn fixed-bottom">

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/" target="_blank">
                <i class="fa fa-facebook mr-3"></i>
            </a>

            <a href="https://twitter.com/" target="_blank">
                <i class="fa fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/" target="_blank">
                <i class="fa fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fa fa-google-plus mr-3"></i>
            </a>
        </div>
        <!-- Social icons -->

        <!--Copyright-->
        <div class="footer-copyright py-3">
            © 2018 Copyright:
            <a href="https://iamawriter.co.ke/" target="_blank">Iam A Writer</a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
     <!--Bootbox -->
    <script type="text/javascript" src="js/bootbox.min.js"></script>
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();

        $(document).ready(function(){

  // Delete 
  $('.delete').click(function(){
    var el = this;
    var id = this.id;
    var splitid = id.split("_");

    // Delete id
    var deleteid = splitid[1];
 
    // Confirm box
    bootbox.confirm("Are you sure want to delete?", function(result) {
 
       if(result){
         // AJAX Request
         $.ajax({
           url: 'delete.php',
           type: 'POST',
           data: { id:deleteid },
           success: function(response){

             // Removing row from HTML Table
             $(el).closest('tr').css('background','tomato');
             $(el).closest('tr').fadeOut(800, function(){ 
               $(this).remove();
             });

           }
         });
       }
 
    });
 
  });
});
    </script>

</body>

</html>
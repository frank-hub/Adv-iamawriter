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
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">About MDB</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/getting-started/" target="_blank">Free download</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank">Free tutorials</a>
                        </li>
                    </ul>
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
                <a href="index.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-pie-chart mr-3"></i>Dashboard
                </a>
                <a href="#" class="list-group-item active waves-effect">
                    <i class="fa fa-book mr-3"></i>Subject
                </a>
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
    <div class="row flex-center" style="margin-top:50px;">
    <div class="col-md-8">
    <?php
        // if (isset($_GET['publish'])) {
        //     $connecting = mysqli_connect("localhost" , "root" , "12012" , "iamawriter");

        //     $sub_name = $_GET['subj_name'];
        //     $sub_file = $_GET['status'];
        //     $subject_cats = $_GET['book_cat'];
        //     // $subject_cats = md5($subject_cat);
        //     $date = date('D/M/Y');
        //     $qry = "INSERT INTO `subjects`(`subject_name`, `subject_file`, `date_uploaded`, `subject_cat`) 
        //     VALUES('$sub_name','$sub_file','$date','$subject_cats')";

        //     mysqli_query($connecting,$qry)or die(mysqli_error($connecting));
        //     // mysqli_close($connecting);
        // }

        if (isset($_POST['publish'])) 
    {
        upload();
    }

    function upload()
    {
       
            $connecting = mysqli_connect("localhost" , "root" , "12012" , "iamawriter");
            if (isset($_FILES['subject_file'])) 
            {  
               $names = $_FILES['subject_file']['name'];
               $sizes = $_FILES['subject_file']['size'];
               $types = $_FILES['subject_file']['type'];
               $tmp = $_FILES['subject_file']['tmp_name'];
               $folder_location = 'uploads/'.$_FILES['subject_file']['name'];
               $move = move_uploaded_file($tmp,$folder_location);
                
               if ($move) {
                   $sub_name = $_POST['subj_name'];
                $sub_file = $_POST['status'];
                $subject_cats = $_POST['book_cat'];
                // $subject_cats = md5($subject_cat);
                $date = date('D/M/Y');
                   $qry = "INSERT INTO `subjects`(`subject_name`, `subject_file`, `date_uploaded`, `subject_cat`) 
                             VALUES('$sub_name','$names','$date','$subject_cats')";
                   if (mysqli_query($connecting,$qry)or die(mysqli_error($connecting))) {
                      ?>
                      <div class="btn btn-block alert alert-success alert-dismissable" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Success</strong>The Subject <?php echo $sub_name ?> has been upload/published
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <?php
               }
               else{
                   ?>
                   <div class="btn btn-block alert alert-danger alert-dismissable" role="alert">
                          <button type="button " class="close" data-dismiss="alert" aria-label="close">
                          <strong>Failed !</strong>The Subject failed to upload try again .
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                   <?php
               }
           }
        }
    }

        ?>
    </div>
    </div>
        <form  method="post" enctype="multipart/form-data">
            <div class="row" style="margin-top: 50px">
                <div class="col-md-4">
                    <img src="img/placeholder/350x200.png" alt="" class="img-thumbnail">
                    
                    <br>
                    <hr>
                    <input type="file" name="subject_file" id="userImage" required>
                </div>
                <div class="col-md-6">
        
                    <!-- Material input text -->
                    <div class="md-form">
                        <i class="fa fa-book prefix grey-text"></i>
                        <input type="text" id="sub_name" name="subj_name" class="form-control" required>
                        <label for="sub_name">File Name</label>
                    </div>
        
                    <!-- Material input id -->
                    <div class="md-form">
                        <i class="fa fa-clipboard prefix grey-text"></i>
                        <input type="text" id="desc" class="form-control" required>
                        <label for="desc">Description</label>
                    </div>
        
                    <!-- Material input email -->
                    <div class="md-form">
                        <!-- <i class="fa fa-envelope prefix grey-text"></i> -->
                        <select class="form-control" name="status" required>
                            <option value="selected" selected>Status</option>
                            <option value="free">Free</option>
                            <option value="sell">Selling</option>
                        </select>
                        <!-- <label for="materialFormRegisterEmailEx">Your email</label> -->
                    </div>
        
                    <!-- Material input email -->
                    <div class="md-form">
                        <i class="fa fa-folder-open prefix grey-text"></i>
                        <input type="text" id="cat" name="book_cat" class="form-control" required>
                        <label for="cat">Book Category</label>
                    </div>        
                    <div class="text-center mt-4">
                        <button class="btn btn-primary" name="publish">PUBLISH</button>
                    </div>
        
                    <!-- Material form register -->
                </div>
            </div>
        </form>
        
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
       <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>

</html>
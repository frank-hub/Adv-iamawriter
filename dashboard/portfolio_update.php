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
<style>
    textarea{
        margin-right: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>
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
                <a href="add_subject.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-book mr-3"></i>Subject
                </a>
                <a href="about_update.php" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-table mr-3"></i>About</a>
                <a href="" class="list-group-item active waves-effect">
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
        <div style="margin-top:50px">
<!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified warning-color">
    <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Current</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Instructions</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Update</a>
    </li>
</ul>
<!-- Tab panels -->
<div class="tab-content card">
        <!--Panel 1-->
    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
        <div class="flex-center">
<textarea name="about" id="" cols="30" rows="10" style="">
            Current content at the home page
        </textarea>
<textarea name="about" id="" cols="30" rows="10">
                    Current content at the home page
        </textarea>
<textarea name="about" id="" cols="30" rows="10">
                    Current content at the home page
        </textarea>
        </div>
    </div>
    <!--/.Panel 1-->
    <!--Panel 2-->
    <div class="tab-pane fade" id="panel2" role="tabpanel">
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
            porro voluptate odit minima.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil odit magnam minima, soluta doloribus
            reiciendis molestiae placeat unde eos molestias. Quisquam aperiam, pariatur. Tempora, placeat ratione
            porro voluptate odit minima.</p>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div class="tab-pane fade" id="panel3" role="tabpanel">
        <br>
       <div class="row flex-center">
           <div class="col-md-8">
            <form action="" method="post">
                <div class="md-form">
                    <label for="cont1">Content 1</label>
                    <textarea name="cont1" id="" class="form-control" required></textarea>
                </div>
                <div class="md-form">
                    <label for="cont1">Content 2</label>
                    <textarea name="cont2" id="" class="form-control" required></textarea>
                </div>
                <div class="md-form">
                    <label for="cont1">Content 3</label>
                    <textarea name="cont3" id="" class="form-control" required></textarea>
                </div>
                <div class="md-form">
                    <button type="submit" class="btn  btn-info">UPDATE</button>
                </div>
            </form>
           </div>
       </div>
    </div>
    <!--/.Panel 3-->
    </div>
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
    <!-- Initializations -->
    <script type="text/javascript">
        // Animations initialization
        new WOW().init();
    </script>

</body>

</html>
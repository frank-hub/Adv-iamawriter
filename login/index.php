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
  body{
background-color: #F0F0F0;
overflow-x: hidden;
overflow-y: scroll;
  }
</style>
<body>
<div class="row">
    <div class="col-md-3 offset-4" style="margin-top: 50px">
        <div class="card">
            <div class="card-header text-center info-color-dark">
                ADMIN LOGIN
            </div>
            <div class="card-body info-color">
                <form action="auth.php" method="post">
                    <div class="md-form">
                        <label for="name">Username</label>
                        <input type="text" name="username" id="name" class="form-control">
                    </div>
                    <div class="md-form">
                        <label for="pass">Password</label>
                        <input type="text" name="passd" id="pass" class="form-control">
                    </div>
                    <div class="md-form">
                        <button type="submit" class="btn btn-block btn-outline-white" name="login_btn">Login</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
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

<?php
// if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['success']);
	header("location: ../login/");
// }
// else {
//    echo " error";
// }
?>
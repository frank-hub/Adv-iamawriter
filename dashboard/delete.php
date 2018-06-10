<?php


if (isset($_POST['id'])) {
	delete();
}
function delete(){
    include '../class/conn.php';
    $id = $_POST['id'];
	$del = "DELETE FROM `subjects` WHERE subject_id = $id";
    mysqli_query($connecting,$del)or die(mysqli_error($connecting));
   
	echo '<button class="btn btn-block btn-success">Deleted</button>';

}
  $GoTo = "index.php";
  header(sprintf("Location: %s", $GoTo));
?>
<?php
include '../class/conn.php'; 

// if (isset($_GET['id'])) {
//     $id = $_GET['id'];
//    $qry = "SELECT * FROM `subjects` WHERE subject_id='$id'";
//    $exec_qrys = mysqli_query($connecting,$qry)or die(mysqli_error($connecting));
//    $data = mysqli_fetch_array($exec_qrys)or die(mysqli_error($connecting));

//    $file = '../dashboard/uploads/'.$data['subject_file'];
//    if (file_exists($file)) {
//         header('Content-Description:'.$data['description']);
//         header('Content-Type:'.$data['type']);
//         header('Content-Disposition:'.$data['disposition'].'; filename ="'.basename($file).'"');
//         header('Expires: '.$data['expires']);
//         header('Cache-Control: '.$data['cache']);
//         header('Pragma: '.$data['pragma']);
//         header('Content-Length: '.filesize($file));
//         readfile($file);
//         exit;
//    }
// }

$FileNo=$_GET['id'];

$qry = "SELECT * FROM `subjects` WHERE subject_id='$FileNo'";
   $exec_qrys = mysqli_query($connecting,$qry)or die(mysqli_error($connecting));
   $data = mysqli_fetch_array($exec_qrys)or die(mysqli_error($connecting));

   $FilePaths = '../dashboard/uploads/'.$data['subject_file'];
//Use Mysql Query to find the 'full path' of file using $FileNo.
// I Assume $FilePaths as 'Full File Path'.

download_file($FilePaths);

function download_file( $fullPath )
{
  if( headers_sent() )
    die('Headers Sent');


  if(ini_get('zlib.output_compression'))
    ini_set('zlib.output_compression', 'Off');


  if( file_exists($fullPath) )
  {

    $fsize = filesize($fullPath);
    $path_parts = pathinfo($fullPath);
    $ext = strtolower($path_parts["extension"]);

    switch ($ext) 
    {
      case "pdf": $ctype="application/pdf"; break;
      case "exe": $ctype="application/octet-stream"; break;
      case "zip": $ctype="application/zip"; break;
      case "doc": $ctype="application/msword"; break;
      case "xls": $ctype="application/vnd.ms-excel"; break;
      case "ppt": $ctype="application/vnd.ms-powerpoint"; break;
      case "gif": $ctype="image/gif"; break;
      case "png": $ctype="image/png"; break;
      case "jpeg":
      case "jpg": $ctype="image/jpg"; break;
      default: $ctype="application/force-download";
    }

    header("Pragma: public"); 
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private",false); 
    header("Content-Type: $ctype");
    header("Content-Disposition: attachment; filename=\"".basename($fullPath)."\";" );
    header("Content-Transfer-Encoding: binary");
    header("Content-Length: ".$fsize);
    ob_clean();
    flush();
    readfile( $fullPath );

  } 
  else
    die('File Not Found');

}
?>
<?php
class connection
           {
                function conn(){
                $connecting = mysqli_connect("localhost" , "root" , "12012" , "iamawriter");
            }
           }
?>

<!-- <?php 
            require ('../class/connect.php');
            $connect = new connection ;
            $connect->conn();
            $qry  = mysqli_query(conn()->$connecting,"select * from admin");
            while ($result = mysqli_fetch_array(conn()->$connecting,$qry)) {
                echo "welcome";
            }
            ?> -->
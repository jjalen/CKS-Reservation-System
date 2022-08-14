<?php 

$connection = mysqli_connect("localhost", "root", "", "reservation");

if (mysqli_connect_errno()) {
    echo "Connection Failed ".mysqli_connect_error();
}



 ?>
<?php

include 'connect.php';
if(isset($_GET['delnum']))
{
    $rid=intval($_GET['delnum']);
    $delSql = mysqli_query($connection, "DELETE FROM reservation WHERE ID=$rid");
    if($delSql){
        echo "<script> alert('Data deleted!');</script>";
        echo "<script> window.location.href = 'Dashboard.php'</script>";
    }
    else{
        echo "<script> alert('Data was not deleted!');</script>";
    }
}

?>
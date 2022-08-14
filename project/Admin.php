<?php

$host="localhost";
$user="root";
$password="";
$db="user";


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("connection error");
}

/*--- Admin Information--*/
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from login where username='".$username."' AND password='".$password."'";
    $result=mysqli_query($data,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="admin")
    {
        $_SESSION["username"]=$username;
        echo "<script> document.location='Document.php'</script>";
    }

    else
    {
        echo "<script> alert('Incorrect kase');
        document.location='Admin.php';</script>";
    }
}
?>

<html>
    <head>
        <title>Admin Panel</title>
        <link rel="stylesheet" href="AdminStyle.css">
    </head>
    <body>
        <div class="container1">
            <div class="form">
                <form action="#" method="POST">
                    <h2>Admin Panel</h2>
                    <input type="text" name="username" placeholder="Admin" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                </form>
            </div>
            <div class="logo">
                <img src="CKSLogo.png">
            </div>
        </div>
    </body>
</html>
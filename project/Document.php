<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="DocuStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <li>Dashboard</li>
            <a href="Dashboard.php"><li>Appointment</li></a>
            <a href="Admin.php"><li>Logout</li></a>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                <div class="user">
                    <a href="" class="btn">Add New</a>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
            <?php
                include 'connect.php';
                $count_query4 = mysqli_query($connection, "SELECT COUNT(*) AS count FROM reservation");
                $row4 = mysqli_fetch_array($count_query4);
                $count4 = $row4['count'];

                ?>
                <div class="card">
                    <div class="box">
                    <h1><?php echo $count4 ?></h1>
                        <h3>Upcoming</h3>
                    </div>
                    <div class="icon-case">
                        <img src="upcoming.svg" alt="">
                    </div>
                </div>
                <?php
                include 'connect.php';
                $count_query4 = mysqli_query($connection, "SELECT COUNT(*) AS count FROM reservation");
                $row4 = mysqli_fetch_array($count_query4);
                $count4 = $row4['count'];

                ?>
                <div class="card">
                    <div class="box">
                         <h1><?php echo $count4 ?></h1>
                        <h3>Booked</h3>
                    </div>
                    <div class="icon-case">
                        <img src="note2.svg" alt="">
                    </div>
                </div>
                <?php
                include 'connect.php';
                $count_query4 = mysqli_query($connection, "SELECT COUNT(*) AS count FROM reservation");
                $row4 = mysqli_fetch_array($count_query4);
                $count4 = $row4['count'];

                ?>
                <div class="card">
                    <div class="box">
                    <h1><?php echo $count4 ?></h1>
                        <h3>Completed</h3>
                    </div>
                    <div class="icon-case">
                        <img src="completed.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="content-2"></div>
        </div>
    </div>
</body>
</html>
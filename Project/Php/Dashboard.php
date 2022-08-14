<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="TableStyle.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Admin</h1>
        </div>
        <ul>
            <a href="Document.php"><li>Dashboard</li></a>
            <a href="Dashboard.php"><li>Appointment</li></a>
            <!-- <li><a href="Admin.php">Logout</a></li> -->
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
          <h3>Bookings</h3>
            <?php
            include 'connect.php';

            $sql = "SELECT * FROM reservation";
            $result = $connection->query($sql);

            if ($result->num_rows > 0) {
              echo "<form method= 'POST' action=''>
              <table>
              <tr>
              
              <th>Museum</th>
              <th>Date</th>
              <th>Time</th>
              <th>No. of Person</th>
              <th>First name</th>
              <th>Last name</th>
              <th>Email</th>
              <th>Number</th>
              <th>Address</th>
              <th>Affiliation</th>
              <th>Options</th>
              </tr>";
              // output data of each row
              //include in line 17 <th>ID</th>
              //include in line 35<td>".$row["id"]."</td>
              while($row = $result->fetch_assoc()) {
                echo "<tr>
                
                <td>".$row["museum"]."</td>
                <td>".$row["date"]."</td>
                <td>".$row["time"]."</td>
                <td>".$row["person"]."</td>
                <td>".$row["first"]."</td>
                <td>".$row["last"]."</td>
                <td>".$row["email"]."</td>
                <td>".$row["address"]."</td>
                <td>".$row["number"]."</td>
                <td>".$row["affiliation"]."</td>
                <td><a class='delete' href='Delete.php?delnum=".$row['id']."'>Delete</a></td>
                </tr>";
                
              }
              echo "</table></form>";
            } else {
              echo "0 results";
            }
            $connection->close();
            ?>
          </div>
    </div>
</body>
</html>
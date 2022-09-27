<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="reservation.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/travel.png" />
    <title>My reservations!</title>
</head>

<body>

<!-- jQuery and Bootstrap libraries -->
<script src="jquery-3.4.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">My reservations!</a>
    <img class="logo" src="./images/travel.png" />
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/make%20a%20trip.php">Make a trip!</a>
            </li>

        </ul>
    </div>
</nav>

<!-- MAIN BODY -->
<div class="container features">
    <div class="card">
        <div class="card-body ">

            <!-- PHP LOGIN SESSION -->
            <?php
            session_start();
            if(isset($_SESSION["logged"]))
            {
                echo "<h1>Welcome ".$_SESSION["usrname"]."</h1>";

            }
            else{
                echo "<h1>You are NOT logged in!</h1>";
            }





            //KIIRJA A FOGLALASOKAT
            //database connect
            $db = mysqli_connect('localhost','root','','travelmanager')
            or die('Error connecting to MySQL server.');

            //SQL query
            if(isset($_SESSION["logged"]))
            {

                $query = "SELECT * FROM `reservation` WHERE `Regis_Name`='$_SESSION[usrname]'";
                mysqli_query($db, $query) or die('Error querying database.');

                //result based on database
                $result = mysqli_query($db, $query);

                //Displays the users reservations who is logged in.
                if(!mysqli_num_rows($result))
                {
                    echo "<h1>You don't have any reservations!</h1>";
                }
                else
                {
                    echo "<table class='table table-hover table-bordered'>
                        <thead class='thead-dark'>
						<tr>
						<th scope='col'>Name</th>
						<th scope='col'>Reservation Date</th>
						<th scope='col'>Nr. of persons</th>
						<th scope='col'>Booked trip</th>
						<th scope='col'>Booked hotel</th>
						<th scope='col'>Booked flight</th>
						<th scope='col'>Rented car</th>
						<th scope='col'>Summary of trip</th>
						</tr>
                        </thead>
                        <tbody>";

                    while ($row = mysqli_fetch_array($result))
                    {

                        echo "<tr>";
                        echo "<th class='align-middle text-center'>" . $row['Regis_Name'] . "</th>";
                        echo "<td class='align-middle text-center'>" . $row['Reservation_Date'] . "</td>";
                        echo "<td class='align-middle text-center' >" . $row['NumberOfPersons'] . "</td>";
                        echo "<td class='align-middle text-center'>" . $row['Trip_Name'] . "</td>";
                        echo "<td class='align-middle text-center'>" . $row['Hotel_Name'] . "</td>";
                        echo "<td class='align-middle text-center'>" . $row['Flight_Id'] . "</td>";
                        echo "<td class='align-middle text-center'>" . $row['Car_Information'] . "</td>";
                        echo "<td class='align-middle text-center'>" . $row['Pay_Id'] . "</td>";
                        echo "</tr>";

                    }
                    echo "</tbody>
            </table>";
                }
            }
            //LOGOUT

            echo "<br><a href='logout.php' ><input type=button value='Log out' name=logout class='btn btn-primary'></a>";
            //Closing the connection.
            mysqli_close($db);
            ?>
        </div>
    </div>
</div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Make a trip</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="make a trip.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/travel.png" />
</head>

<body>

<script src="jquery-3.4.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="make a trip.js"></script>
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">Make a trip!</a>
    <img class="logo" src="./images/travel.png" />
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/index.php">Home</a>
            </li>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/reservation.php">My reservations!</a>
            </li>
        </ul>
    </div>

</nav>

<div class="container features">
    <?php
    session_start();
    ?>
    <div class="card">
        <div class="card-body">
            <form action="make a trip.php" method="post">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="name" placeholder="Please insert your name here!" required>
                    </div>
                    <div class="col">
                        <input type="date" name="date" class="form-control" name="date" required>
                    </div>
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Number of persons</span>
                            </div>
                            <input type="number" aria-label="Persons" class="form-control"name="persons" required>
                        </div>
                    </div>
                </div>
                <br>
                <div class="form-row">
                    <div class="col">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">
                                <h4>Car rent</h4>
                            </div>
                            <div class="card-body">
                                <img class="card-img" src="./images/carrent4.jpg" alt="Card image">
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#carModal">
                                    Please select your car!
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="carModal" tabindex="-1" role="dialog"
                                     aria-labelledby="carModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="carModalTitle" style="color: black;">Select your CAR!
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <?php
                                                        $db=mysqli_connect('localhost','root','','TravelManager');
                                                        if(!$db){
                                                            die("Connection failed:" . mysqli_connect_error());
                                                        }
                                                        $query="SELECT `Car_Information`,`Rent_Date`,`Rent_Date_Back`,`Price` FROM `rentacar`";
                                                        mysqli_query($db,$query) or die ('Error querying database.');
                                                        $result=mysqli_query($db,$query);
                                                        ?>
                                                        <select class="custom-select" name="formCarSelect">
                                                            <option selected></option>
                                                            <?php
                                                            while($row = mysqli_fetch_array($result)):;
                                                                ?>
                                                                <option><?php echo 'Car type: '.$row['Car_Information'].' | Available from: '.$row['Rent_Date']. ' to: ' . $row['Rent_Date_Back']. ' | Price: ' . $row['Price'].'€ ';?></option>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">
                                <h4>Flight</h4>
                            </div>
                            <div class="card-body">
                                <img class="card-img" src="./images/flight5.jpg" alt="Card image">
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#flightModal">
                                    Please select your flight!
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="flightModal" tabindex="-1" role="dialog"
                                     aria-labelledby="flightModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="flightModalTitle" style="color: black;">Select your FLIGHT!
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <?php
                                                        $db=mysqli_connect('localhost','root','','travelmanager');
                                                        if(!$db){
                                                            die("Connection failed:" . mysqli_connect_error());
                                                        }
                                                        $query="SELECT `DestinationFrom`,`DateFrom`,`DestinationTo`,`DateBack`,`Price` FROM `flight`";
                                                        mysqli_query($db,$query) or die ('Error querying database.');
                                                        $result=mysqli_query($db,$query);
                                                        ?>
                                                        <select class="custom-select" name="formRepuloSelect">
                                                            <option selected></option>
                                                            <?php
                                                            while($row = mysqli_fetch_array($result)):;
                                                                ?>
                                                                <option><?php echo $row['DestinationFrom'].' » '.$row['DestinationTo']. ' | From: ' . $row['DateFrom']. ' To: ' . $row['DateBack'] . ' | Price: ' . $row['Price'] . '€';?></option>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">
                                <h4>Hotel</h4>
                            </div>
                            <div class="card-body">
                                <img class="card-img" src="./images/hotel.jpg" alt="Card image">
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#hotelModal">
                                    Please select your hotel!
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="hotelModal" tabindex="-1" role="dialog"
                                     aria-labelledby="hotelModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="hotelModalTitle" style="color: black;">Select your HOTEL!
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <?php
                                                        $db=mysqli_connect('localhost','root','','travelmanager');
                                                        if(!$db){
                                                            die("Connection failed:" . mysqli_connect_error());
                                                        }
                                                        $query="SELECT `RoomType`,`Hotel_Name`,`Extras`,`Price` FROM `hotel`";
                                                        mysqli_query($db,$query) or die ('Error querying database.');
                                                        $result=mysqli_query($db,$query);
                                                        ?>
                                                        <select class="custom-select" name="formHotelSelect">
                                                            <option ></option>
                                                            <?php
                                                            while($row = mysqli_fetch_array($result)):;
                                                                ?>
                                                                <option ><?php echo $row['Hotel_Name'] . ' | ' . $row['RoomType'] . ' room | Extras: ' . $row['Extras'] . ' | Price: ' . $row['Price'] . '€ ';?></option>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">
                                <h4>Trip</h4>
                            </div>
                            <div class="card-body">
                                <img class="card-img" src="./images/trip1.jpg" alt="Card image">
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#tripModal">
                                    Please select your trip!
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="tripModal" tabindex="-1" role="dialog"
                                     aria-labelledby="tripModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tripModalTitle" style="color: black;">Select your TRIP!
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <?php
                                                        $db=mysqli_connect('localhost','root','','travelmanager');
                                                        if(!$db){
                                                            die("Connection failed:" . mysqli_connect_error());
                                                        }
                                                        $query="SELECT `Price`,`Trip_Name` FROM `trip`";
                                                        mysqli_query($db,$query) or die ('Error querying database.');
                                                        $result=mysqli_query($db,$query);
                                                        ?>
                                                        <select class="custom-select" name="formTripSelect">
                                                            <option selected></option>
                                                            <?php
                                                            while($row = mysqli_fetch_array($result)):;
                                                                ?>
                                                                <option><?php echo $row['Trip_Name'] . ' | Price: ' . $row['Price'] . '€ '?></option>
                                                            <?php
                                                            endwhile;
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Price: </span>
                            </div>
                            <input type="number" name="price" aria-label="Price" class="form-control">
                        </div>
                    </div>
                    <div class="col">
                        <input type="submit" name="formSubmit" value="Submit" class="btn btn-primary mktsubmit">
                    </div>

					<div class="col">
						<input type="submit" name="Show" value="Show" class="btn btn-primary mktsubmit">
					</div>

                </div>
                <div> <?php

							if (isset($_POST["formSubmit"]))
							{

								if(!isset($_SESSION["logged"]))
								{
									$error[]="You are NOT logged in!";
								}

								if(empty($_POST["price"]))
								{
									$error[]="Please insert the price of your reservation!";
								}
								if(!isset($error))
								{
									$name = $_POST["name"];
									$date = $_POST["date"];
									$persons = $_POST["persons"];
									$car = $_POST["formCarSelect"];
									$flight = $_POST["formRepuloSelect"];
									$hotel=$_POST["formHotelSelect"];
									$trip=$_POST["formTripSelect"];
									$price=$_POST["price"];
									$query="INSERT INTO `reservation` (`Reservation_Date`, `Trip_Name`, `Regis_Name`,
									`NumberOfPersons`, `Hotel_Name`,`Flight_Id`,`Car_Information`,`Pay_Id`)
									VALUES ('$date', '$trip', '$name', '$persons', '$hotel','$flight','$car','$price');";
									mysqli_query($db,$query);



									if(mysqli_errno($db) == 1062)
									{
										echo "Name/E-mail not available!";
									}
										elseif(mysqli_errno($db) == 0)
										{
											echo "Your reservation was succesful!";
										}
										else die("SQL ERROR!" . mysqli_error());
								}
								else
								{
									echo "You have the following ERRORS!<br/>";
									echo implode("<br/>", $error);
								}
							}
							if(isset($_POST["Show"]))
							{
								 echo $_POST["name"] . "<br>" . $_POST["date"] . "<br>" . $_POST["persons"] . "<br>" .  $_POST["formCarSelect"] . "<br>" . $_POST["formRepuloSelect"] . "<br>" . $_POST["formHotelSelect"] . "<br>" . $_POST["formTripSelect"] . "<br>" . $_POST["price"];
							}
						?>
                        </div>
            </form>
        </div>
    </div>
</div>

</body>

</html>

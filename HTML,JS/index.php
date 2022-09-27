<!DOCTYPE html>
<!-- PHP CONNECT TO DATABASE START -->
<?php
$db=mysqli_connect('localhost','root','','travelmanager');
if(!$db)
{
    die("Connection failed:" . mysqli_connect_error());
}
session_start();
?>
<!-- PHP CONNECT TO DATABASE END -->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="main.css" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/travel.png" />
    <title>Travel Manager</title>
</head>

<body>
<script src="jquery-3.4.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Navigation bar start -->
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">Travel Manager</a>
    <img class="logo" src="./images/travel.png" />
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/reservation.php">My reservations!</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/make%20a%20trip.php">Make a trip!</a>
            </li>
            <li class="nav-item">
                <!--<a class="nav-link" href="#">About</a>-->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">About
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <center><img src="./images/about.png" alt="About" height="auto" width="400px" /></center>
                                <h1 class="text-center">Hello!</h1>
                                <p class="text-justify font-weight-bold">We are four students from a university based in Transylvania.</p>
                                <p class="text-justify font-weight-bold">We made this website that helps the user to book a trip in a really easy way.</p>
                                <p class="text-justify font-weight-bold">You can book a flight or a hotel or you can make a whole trip. You decide what you want.</p>
                                <h4 class="text-center">The choice is yours!</h4>
                                <h4 class="text-center">Enjoy it.</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

            <!--INfO-->
            <li class="nav-item">

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                    <img src="./images/info.png" alt="Info" height="25px" width="25px" />
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalScrollableTitle">Info </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <center><img src="./images/inforr.jpg" alt="About" height="auto" width="400px" /></center>
                                Before you want to go somewhere , you need to know some important things:


                                <ul>
                                    <li>for some countries you need a passport
                                    </li>

                                    <li>for some countries you need important vaccines
                                    </li>

                                    <li>for some countries you need visas
                                    </li>
                                </ul>


                                Here is a website where you can find the countries , where you need visa: <a href="https://cibtvisas.com/visa-quick-check" target="_blank">Click here</a>
                            </div>
                        </div>

                    </div>
                </div>
    </div>
    </li>

    </ul>
    </div>
</nav>
<!-- Navigation bar end -->

<!-- Header photo carousel start -->


<header class="page-header header container-fluid">
    <?php
    //NEZI HOGY BE VAN E LEPVE
    if(isset($_SESSION["logged"]))
    {

        echo "<h1 class='text-center'>Welcome ".$_SESSION["usrname"]."</h1>";

    }

    ?>
    <div class="description">
        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./images/bluebicycle.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Hey you! Yes, YOU! </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/ocean.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Don't think too much!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/city.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p>Book NOW and enjoy your BEST vacation!</p>
                        </div>
                    </div>
                    <!-- ...-->
                    <div class="carousel-item">
                        <img src="./images/photo-1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/photo-2.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/photo-3.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/photo-4.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="./images/photo-5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <!-- ...-->
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</header>
<!-- Header photo carousel end -->
<!-- Header photo carousel javascript -->
<script src="main.js"></script>

<!-- MAIN BODY PART START -->

<div class="container features">
    <div class="row">
        <!-- Beach card start -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z_6noXde5NQ" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Beach</h5>
                    <p class="card-text">When you come to the beach you can relax and leave your communication problems to us, the beach stands for work that is relevant, refreshing and insightful.
                    </p>
                    <a href="http://localhost/make%20a%20trip.php" class="btn btn-primary">Make a trip!</a>
                </div>
            </div>
        </div>
        <!-- Beach card end -->
        <!-- Mountain card start -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FCPdIvXo2rU" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Mountains</h5>
                    <p class="card-text">Somewhere between the bottom of the climb and the summit is
                        the answer to the mystery you want to know!</p>
                    <a href="http://localhost/make%20a%20trip.php" class="btn btn-primary">Make a trip!</a>
                </div>
            </div>
        </div>
        <!-- Mountain card end -->
        <!-- Urban card start -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/99re33iIt7s" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>

                </div>
                <div class="card-body">
                    <h5 class="card-title">Urban</h5>
                    <p class="card-text">A city isn't so unlike a person. They both have the marks to show they have many stories to tell. </p>
                    <a href="http://localhost/make%20a%20trip.php" class="btn btn-primary">Make a trip!</a>
                </div>
            </div>
        </div>
        <!-- Urban card end -->
    </div>
    <br/>
    <br/>
    <br/>

    <div class="row">
        <!-- REGISTRATION! -->
        <div class="col">
            <div class="card mb-3" style="width: 95%;">
                <div class="row no-gutters">
                    <div class="card-body">
                        <h3 class="feature-title">Please register!</h3>
                        <!-- Registration form start -->
                        <form action="index.php" method="post">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip01">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">E-mail</label>
                                    <input type="email" class="form-control" name="email" placeholder="E-mail">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationTooltip04">Password</label>
                                    <input type="password" class="form-control" name="passw" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="validationTooltip02">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                </div>
                                <div class="col">
                                    <label for="validationTooltip03">Telephone Number</label>
                                    <input type="text" class="form-control" name="telnum" placeholder="Telephone Number">
                                </div>
                            </div>
                            <!-- Registration PHP start -->
                            <?php
                            if (isset($_POST["registerSubmit"]))
                            {
                                //The code checks whichever field is completed.
                                if(empty($_POST["name"]))
                                {
                                    $error[]="Please add your name!";
                                }
                                if(empty($_POST["email"]))
                                {
                                    $error[]="Please add your e-mail!";
                                }
                                if(empty($_POST["passw"]))
                                {
                                    $error[]="Please add your password!";
                                }
                                if(!isset($error))
                                {
                                    // Here you get the input from the form through variables.
                                    $name = $_POST["name"];
                                    $email = $_POST["email"];
                                    $passw = $_POST["passw"];
                                    $addr = $_POST["address"];
                                    $telnum = $_POST["telnum"];

                                    // SQL query
                                    $query="INSERT INTO `registration` (`Regis_Name`, `Telnumber`, `Address`, `Email`, `Password`) VALUES ('$name', '$telnum', '$addr', '$email', '$passw');";
                                    mysqli_query($db,$query);

                                    //Checking if the Name and Email are UNIQUE!
                                    if(mysqli_errno($db) == 1062)
                                    {
                                        echo "Name/E-mail not available!";
                                    }
                                    elseif(mysqli_errno($db) == 0)
                                    {
                                        echo "Your registration was succesful!";
                                    }
                                    else die("SQL ERROR!" . mysqli_error());
                                }
                                else
                                {
                                    echo "You have the following ERRORS!<br/>";
                                    echo implode("<br/>", $error);
                                }
                            }
                            ?>
                            <!-- Registration PHP end -->
                            <div class="form-row">
                                <input type="submit" name="registerSubmit" value="Submit registration!"
                                       class="btn btn-primary">
                            </div>
                        </form>
                        <!-- Registration form end -->
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <!-- LOGIN! -->
            <div class="card mb-3" style="width: 95%;">
                <div class="row no-gutters">
                    <div class="card-body">
                        <h3 class="feature-title">Please log in!</h3>
                        <!-- Login form start -->
                        <form action="index.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <label for="validationTooltip01">Username:</label>
                                    <input type="text" class="form-control" id="validationTooltip01" name="usrname"
                                           placeholder="Username" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="validationTooltip04">Password:</label>
                                    <input type="password" class="form-control" id="validationTooltip02" name="passwd"
                                           placeholder="Password" required>
                                    <div class="valid-tooltip">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="form-row">

                                <div class="col">
                                    <input type="submit" name="login" value="Log in!" class='btn btn-primary'>
                                </div>
                                <div class="col">
                                    <?php
                                    //LOGOUT
                                    echo "<a><a href='logout.php'><input type=button value='Log out!' name=logout class='btn btn-primary'></a>";
                                    ?>
                                </div>
                            </div>

                        </form>
                        <!-- Login form end -->

                        <!-- Login PHP start -->
                        <div class="form-row">
                            <?php
                            if ( isset($_POST["login"]))
                            {
                                if(empty($_POST["usrname"]) OR empty($_POST["passwd"]))
                                {
                                    echo "Name / Password required!";
                                }
                                else
                                {
                                    $usrname = $_POST["usrname"];
                                    $query = "SELECT * FROM registration WHERE Regis_Name='$usrname'";
                                    $result = mysqli_query($db,$query) or die(mysqli_error());
                                    if(mysqli_num_rows($result) == 1)
                                    {

                                        $user = mysqli_fetch_assoc($result);
                                        if(md5($_POST["passwd"])==md5($user["Password"]))
                                        {
                                            $_SESSION["logged"]=1;
                                            $_SESSION["usrname"]=$user["Regis_Name"];
                                            $_SESSION["email"]=$user["Email"];
                                            echo "Login succesful!";
                                        }
                                        else
                                        {
                                            echo "Incorrect password!";
                                        }
                                    }
                                    else
                                    {
                                        echo "User doesn't exist!";
                                    }
                                }
                            }

                            mysqli_close($db);


                            ?>
                        </div>
                        <!-- Login PHP end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- MAIN BODY PART END -->

<!-- FOOTER START -->
<footer class="page-footer">
    <div class="container">
        <div class="row.text-center">
            <div class="footer-copyright text-center">© 2019 Copyright: MyWebsite.com</div>
        </div>
    </div>
</footer>
<!-- FOOTER END -->
</body>

</html>
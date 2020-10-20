<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Impower Network</title>
    <link rel="icon" href="img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/71a619396b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/mdb.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body ng-app="ImApp">
    <div class="container-fluid navigation">
        <nav class="navbar navbar-light navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">
                    <img src="img/logo.png" width="200px" alt="impower network">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="dashboard.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#/Profile">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mysynod.html">My Synod</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="slipsDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                                Transactions
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="slipsDropdown">
                                <li><a class="dropdown-item" href="#">Specific Asks</a></li>
                                <li><a class="dropdown-item" href="#">Thank You Slip</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trainings.html">Trainings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tasks.html">Tasks</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#">Account Settings</a></li>
                                <li><a class="dropdown-item" href="#">Financial Details</a></li>
                                <li><a class="dropdown-item" href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control mr-2" type="search" placeholder="Search Member" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-5" data-ng-view>

    </div>    

    <div class="container-fluid footer pt-4 pb-2">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img width="120px" style="margin-top: -30px" src="img/ivkh.png" alt="Impower Virtual Knowledge Hub LLP">
            </div>
            <div class="col-md-4">
                <p class="text-center">Copyright 2021 Impower Network</p>
            </div>
            <div class="col-md-4">
                <ul class="list-inline right-auto">
                    <li class="list-inline-item">
                        Privacy Policy
                    </li>
                    <li class="list-inline-item">
                        Terms and Conditions
                    </li>
                    <li class="list-inline-item">
                        Disclaimer
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <script src="js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.0/angular.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.26/angular-ui-router.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-messages/1.5.0/angular-messages.js"></script>             
    <script src="js/app.js"></script>
    <script src="dashboard/dbController.js"></script>
    <script src="profile/profileController.js"> </script>
</body>
</html>
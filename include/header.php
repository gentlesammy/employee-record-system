



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> EMPLOYEE RECORD SYSTEM </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/css/dataTables.bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="datatables/css/jquery.dataTables.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <style>
        section {
            background: darkblue;
            background: url('images/back3.jpeg');
            background-size: cover;

        }

        .jumbotron {
            background: rgba(250, 250, 250, 0.4);
            border-radius: 100px 100px 100px 100px;
        }

        #stafftab{
            background: darkblue;
            background: url('images/back1.jpg');
            background-size:contain;
            background-position: center;
            background-repeat: no-repeat;
        }

    </style>

</head>

<body>

    <!-- navbar section goes here -->

    <nav class="navbar navbar-expand-lg bg-white text-primary py-2">
        <a class="navbar-brand" href="#">EMPLOYEE RECORD</a>
        <button class="navbar-toggler border-primary bg-default" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon border-white"></span>
          </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="how.php">How to use</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" href="create.php">Add Employee</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Record</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search Employee" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

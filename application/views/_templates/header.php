<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Campervibe</title>
    
    <link href="/bower_components/bootstrap/dist/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="/bower_components/bootstrap/dist/css/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="/application/styles/site.css" rel="stylesheet" type="text/css" />
    <script src="/bower_components/jquery/dist/jquery.js" type="application/javascript"></script>
    <script src="/bower_components/jquery-validation/jquery.validate.js" type="application/javascript"></script>
    <script src="/bower_components/jquery-validation/additional-methods.js" type="application/javascript"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.js" type="application/javascript"></script>


</head>
<body class="campervibe">
    <header role="banner">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../" class="navbar-brand">
                        Campervibe
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" >
                    <ul class="nav navbar-nav" role="menu">
                         <li class="dropdown-open">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vehicles</a>
                             <ul class="dropdown-menu" role="menu">
                                <li><a href="../vehicle/index" >List</a></li>
                                <li><a href="../vehicle/add" >Add</a></li>
                            </ul>
                            
                        </li>
                        <li class="dropdown-open">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bookings</a>
                             <ul class="dropdown-menu" role="menu">
                                <li><a href="http://campervibebooking.azurewebsites.net/booking/index" >List</a></li>
                                <li><a href="http://campervibebooking.azurewebsites.net/booking/make" >Make</a></li>
                            </ul>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main role="main" class="container-fluid">

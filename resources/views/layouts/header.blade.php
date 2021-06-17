<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
      <title>User Registration System Using PHP And MySql Bootstrap Example</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

     
      <link rel="stylesheet" type="text/css" href="style.css"/>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

      <link rel="stylesheet" type="text/css" href="{{ asset ('css/style.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}"/>
      <link rel="stylesheet" type="text/css" href="{{url('css/font-awesone.min.css')}}"/>

      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/js" href="{{ url('js/jquery.min.js')}}"/>
    <link rel="stylesheet" type="text/js" href="{{ url('js/popper.min.js')}}"/>
    <link rel="stylesheet" type="text/js" href="{{ url('js/bootstrap.min.js')}}"/>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
<body>
<!-- <body> -->
  <div class="container-fluid" style="margin-top:65px">
    <div class="container">
          <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
            <!-- Brand -->
            <a class="navbar-brand" href="#">PHP & MYSQL</a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav" style="font-size:22px">
                <li class="nav-item"><a class="nav-link" href="/">Master</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('Insert')}}" target="_blank">Insert</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('login')}}">Delete</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('registration')}}">Edit</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('login')}}">View</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('registration')}}" >Test</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('login')}}" >Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('registration')}}" >Register</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="Select.php">Select View</a></li>
                <li class="nav-item"><a class="nav-link" href="SearchView.php">ShopView</a></li>
                <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                <li class="nav-item"><a class="nav-link" href="Test.php">Test</a></li>
                <li class="nav-item"><a class="nav-link" href="view.php">View</a></li>  -->
              </ul>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
              </ul>
          </nav>
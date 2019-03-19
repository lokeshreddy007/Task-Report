<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
<link  href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
@import url('https://fonts.googleapis.com/css?family=Lato:300,400');
html, body {
  font-family: 'Lato', serif;
}
.navbar-default {
  font-size: 1.15em;
  font-weight: 400;
  background-color: #ffffff;
  padding: 10px;
  text:f9eeee;
  border: 0px;
  border-radius: 0px;
}
.navbar-default .navbar-nav>li>a {
  color: #f9eeee;
}
.navbar-default .navbar-nav>li>a:hover {
  color: #cbf0ff;
}
.navbar-default .navbar-brand {
  color: #002433;
}
.navbar-default .navbar-brand:hover {
  color: #111756;
  text-shadow: 1px -1px 8px #b3e9ff;
}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
  background-color: #1a2f6d;
  color: white;
}
.navbar-default .navbar-toggle {
  border: none;
}
.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  border: none;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #002433;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}
.dropdown-menu {
  background-color: #004059;
  color: white;
  border: 0px;
  border-radius: 2px;
  padding-top: 10px;
  padding-bottom: 10px;
}
.dropdown-menu>li>a {
  background-color: #f2f6f7;
  color: white;
}
.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
    background-color: #004059;
    color:white;
}
.dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #003246;
}
.navbar-default .navbar-nav .open .dropdown-menu>li>a {
   color: black;
}
@media (max-width: 767px) {
  .dropdown-menu>li>a {
    background-color: #006b96;
    color: #ffffff;
  }
  .dropdown-menu>li>a:hover {
    color: #ffffff;
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover {
    color: #ffffff;
    background-color: transparent;
  }
  .dropdown-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #005577;
  }
} /* END Media Query */
</style>
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <div class="nav navbar-nav navbar"> Employee HomePage</div>
            <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>Welcome/employeereport?id=<?php echo  $_SESSION['emploeeuserid'];?>">Home</a></li>
                <li><a href="<?php echo base_url(); ?>Welcome/userLogout">Logout</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>

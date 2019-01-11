<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<title>Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.text {
   color: white;
   font-size: 12px;
   text-align: center;
   padding:5px;
}
body {
   margin:0;
   padding:0;
   height:100%;
}
#container {
   border-style: solid;
   border-width: 1px;
   border-radius: 15px;
   width: 350px;
   color: #1e73b9;
   height: auto;
   padding:30px;
   margin:auto;
}
#header {
   padding:20px;
   color: #1e73b9;
}
#body {
   padding:10px;
   padding-bottom:60px;    /* Height of the footer */
}
#footer {
   position:absolute;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   background:#6cf;
}
</style>
</head>
    <body>
        <div id="header">
            <h2><center>Welcome to TimeSheet Portal</font></center></h2>
        </div>
        <div id="body">
            <div id="container"><br>
            <form action="<?php echo base_url(); ?>Welcome/loginCheckEmployee" method="post">
           <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font>
           <font color="red"> <i><?php echo $this -> session->flashdata("managerlogin"); ?></i></font>                    <font color="red"> <i></i></font>
                    <div class="form-group" >
                        <label for="email">Username/Email address:</label>
                        <input type="text" class="form-control" id="email" placeholder="Username/EmailAddress" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Password" name="pass" required>
                    </div>
                    <center> <font color="red"> <i></i></font></center>
                    <p><i><a href="http://testing.e-gits.com/www/Welcome/resetpassword">Forgot Password</a></i></p>
                    <button type="submit" class="btn btn-info" role="button">Sign in</button>
                </form>
            </div>
        </div>
        <div id="footer">
            <div class="text"><h7><center>Copyright © 2019 All rights reserved</center></h7></div>
        </div>
    </body>
</html>

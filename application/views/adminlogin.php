<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
   <head>
 <title>Admin Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
  background-image: url("<?php echo base_url(); ?>images/login.png");
  background-size: 1370px 700px;
    background-repeat: no-repeat;
    margin:70px;
    margin-left: 2em;
} 


#live{
color:white;


}

.Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
</style>

 </head>
 
 
 
<body> 
 <div class="Back">
     </div>

  <div class="container-fluid"><br>
  
<section>
  <!--<a href="<?php echo base_url();?>" class="navbar-left"><img src="<?php echo base_url(); ?>images/logo.png"></a>-->
</section>
 
 


  <section id="live">
  <div class="row">
    <div class="col-sm-4">
       <div class="container">
                                     
  
</div>
     </div>
    
    
      <div class="col-sm-4" style="margin-top:-50px;margin-left:4em;">
      <h1><b>Admin Login</b></h1>
        
       <form action="<?php echo base_url(); ?>Welcome/loginCheckAdmin" method="post">
  <div class="form-group" >
    <label for="email">Admin Name:</label>
    <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" style="width:250px;"required>
  </div>
  <div class="form-group">
    <label for="pwd">Admin Code:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="code" style="width:250px;" required>
  </div>
  
  

  
  
  <center> <font color="red"> <i><?php echo $this -> session->flashdata("managerlogin"); ?></i></font></center>
  <center> <font color="red"> <i><?php echo $this -> session->flashdata("user"); ?></i></font></center>

   <p><i> <a href="<?php echo base_url(); ?>Welcome/resetpassword" style="color:red;">Forgot Password</a></i>  </p>
  
<!--   <a href="<?php echo base_url(); ?>UserControl/adminlogin" style="color:white;">Admin Login</a></i> -->


   <button type="submit" class="btn btn-info" role="button">login</button>
    <INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">

  
  
</form>
       
    </div>
    
      <div class="col-sm-4">
      
    </div>
    </div>
  
  </section>
  
  
  
  
  
  
  
  
  </div>
  
</body>
</html>

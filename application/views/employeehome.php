<html>
<head>
<title>Employee Home</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="<?php echo base_url();?>https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?php echo base_url();?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

<link rel="stylesheet" href="<?php echo base_url();?>imports/mdtimepicker.css">
<script src="<?php echo base_url();?>imports/mdtimepicker.js"></script>

<style>
body{
          
		  background-image: url("<?php echo base_url();?>images/login.png");    
		  background-size: cover;
		  background-repeat: no-repeat;
		  }
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
      .Back{
          text-align: right;
          display: inline-block;
          width: 100%;
          margin-bottom: 10px;
          padding-right: 8%;
      }
</style>
<script>


</script>
</head>
<body>
        <?php $id = intval($_GET['id']);?>

    <?php
    
    $emploeeuserid = $_SESSION['emploeeuserid'];  
    ?>
    <?php if($id == $emploeeuserid){?>
            <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;"></h2>

  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/insertreport" method="post">
       <font color="red"> <?php echo $this -> session->flashdata("Created"); ?></font>
                  <!-- <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font> -->
       <input type="hidden" value="<?php echo $id;?>" name ="empid"/>
    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4">Date*:</label>
        <div class="col-sm-8">
              <input type="data" id="datepicker" class="form-control" style="background-color:#5bc0de;"  placeholder="Enter date" name="fromdata" >

	</div>
        </div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Start time*</label>
      <div class="col-sm-8">          
        <input type="text"  class="form-control" id="timepicker" placeholder="Enter Start Time" name="stime"/>    
      </div>
	</div>
	
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Break*:</label>
        <div class="col-sm-4">
            
            <input type="text"   class="form-control" id="pass" placeholder=" Form" name="breakstart" style="background-color:#5bc0de"  >
      </div>
         <div class="col-sm-4">
            
            <input type="text"   class="form-control" id="pass2" placeholder="To " name="breakend" style="background-color:#5bc0de"  >
      </div>
	</div>
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Endtime*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="timepicker2"  placeholder="Enter End time  " name="etime" >
           
      </div>
	</div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Rounding*</label>
      <div class="col-sm-8">          
          <input type="text" class="form-control" id="myInput"   placeholder="Enter Rounding" name="rounding"  style="background-color:#5bc0de">  
                          
      </div>
    </div>

    </div>
      
       
      
	  <div class="col-sm-6"><br>
	  
	  	
	<div class="form-group">
        <label class="control-label col-sm-4" for="email">Total*:</label>
        <div class="col-sm-8">

             <input type="pass" class="form-control"  placeholder="Enter Total" name="total" style="background-color:#5bc0de">
            
      </div>
	</div>	
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Custome*:</label>
        <div class="col-sm-8">

            <input type="text" class="form-control" placeholder="Enter Code" name="custome"  >
            
      </div>
	</div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Project*:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="phone"    placeholder="Enter project" name="project" style="background-color:#5bc0de" >
      <p id="phone"></p>
      </div>
    </div>
            
	
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">cat*</label>
      <div class="col-sm-8">          
          <input class="form-control" id="add" placeholder="Enter cat" name="cat" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">workdetails*</label>
      <div class="col-sm-8">          
          <textarea class="form-control" id="pwd" placeholder="Enter workdetails" name="work"></textarea>
      </div>
    </div>
	<br>
     <div class="btn-group">
     <button  id ="pay" type="submit" style="margin:5px;" class="btn btn-primary">Submit</button>
 

       
</div> 
</div>   
</div> 

              <script>
$(function() {
    $( "#datepicker" ).datepicker({ minDate: 0});
  });

  </script>
   <script>
$(document).ready(function(){

	  $('#timepicker').mdtimepicker();

	});
         </script>
          <script>
         $(document).ready(function(){

	  $('#timepicker2').mdtimepicker();

	});
         </script>
           <script>
         $(document).ready(function(){

	  $('#pass').mdtimepicker();

	});
         </script>
           <script>
         $(document).ready(function(){

	  $('#pass2').mdtimepicker();

	});
         </script>
</form   



         
       <?php  }else{?>
        <div class="container-fluid"><br>

  <section id="live">
  <div class="row">
    <div class="col-sm-4">
       <div class="container">
       
       

                                     
</div>
     </div>
    <div>
  
     
     </div>
      <div class="col-sm-8" style="margin-top:-40px;margin-left:35em;">
      <h1><b>Login</b></h1>
        
       <form action="<?php echo base_url(); ?>Welcome/loginCheckEmployee" method="post">
           <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font>
  <div class="form-group" >
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" style="width:250px;"required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pass" style="width:250px;" required>
  </div>
  

  
  
  <center> <font color="red"> <i><?php echo $this -> session->flashdata("managerlogin"); ?></i></font></center>

  <p><i> <a href="<?php echo base_url(); ?>Welcome/employeeregister" style="color:white;">Register here</a></i>&nbsp; 
  
  <a href="<?php echo base_url(); ?>Welcome/adminlogin" style="color:white;">Admin Login</a></i></p>


   <button type="submit" class="btn btn-info" role="button">login</button>
  
  
</form>
       
    </div>
    
      <div class="col-sm-4">
      
    </div>
    </div>
  
  </section>
  
  
  
  
  
  
  
  
  </div>
       <?php } ?>
	</body>
	</html>

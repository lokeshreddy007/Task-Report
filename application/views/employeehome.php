<html>
<head>
<title>Employee Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Prerequisites: jQuery and jQuery UI Stylesheet -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.21/themes/redmond/jquery-ui.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url();?>imports/jquery.ptTimeSelect.css">
<script src="<?php echo base_url();?>imports/jquery.ptTimeSelect.js"></script>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
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
    
    

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Empolyee Report From</h2>

  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/insertreport" method="post">
       <font color="red"> <?php echo $this -> session->flashdata("Created"); ?></font>
                  <!-- <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font> -->

    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Date*:</label>
        <div class="col-sm-8">
            
            <input type="text" class="form-control" id="date" placeholder="Enter Date " style="background-color:#5bc0de" name="date" required >
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Strat time*</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="sample1" placeholder="Enter Strat time"  name="stime">
      </div>
	</div>
	
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Break*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="pass" placeholder="Enter Break Time " name="break" style="background-color:#5bc0de"  >
      </div>
	</div>
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Endtime*:</label>
        <div class="col-sm-8">
            
            <input type="text"   class="form-control" id="sample2"  placeholder="Enter End time  " name="etime" >
           
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

            <input type="password" class="form-control" placeholder="Enter Code" name="custome"  >
            
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
    var y = <?php echo json_encode($code); ?>;
    var x = <?php echo json_encode($name);?>;


  
    $(function() {
    $( "#date" ).datepicker({ minDate: 0,maxDate:0});
  })
 
  $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample1').ptTimeSelect();
        });  
        $(document).ready(function(){
            // find the input fields and apply the time select to them.
            $('#sample2').ptTimeSelect();
        }); 
</script> 

</form   



	</body>
	</html>

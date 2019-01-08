<html>
<head>
<title>Employee Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
/* Credit to bootsnipp.com for the css for the color graph */
body{
          
		  background-image: url("<?php echo base_url();?>images/login.png");    
		  background-size: cover;
		  background-repeat: no-repeat;
          margin:70px;
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
function myFunction() {
    var x = document.getElementById("myInput").value;   
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(pattern.test(x)){
    	document.getElementById("ma").innerHTML =  "<p style='color:green'></p>";
    }
    else{
    	document.getElementById("ma").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Email</i></p>";
    }
}
function myconpass(){
var pass = document.getElementById("pass").value;
var conpass = document.getElementById("spass").value; 
if(pass == conpass){
     document.getElementById("demo").innerHTML =  "<p style='color:green'></p>";    
}else{
     document.getElementById("demo").innerHTML =  "<p style='color:red'><i>Please Enter same password</i></p>";
   
}
}
</script>
</head>
<body>
    
    

    <div class="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
        
        <h2 style="text-align: center;">Empolyee Registeration From</h2>

        <?php   
$code = array();
$name = array();
    foreach($output as $i){

        array_push($code,$i->code);
        array_push($name,$i->name);

    }
  
?>


  
  <div class="row">
      <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/insertregister" method="post">
       <font color="red"> <?php echo $this -> session->flashdata("Created"); ?></font>
                  <!-- <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font> -->

    <div class="col-sm-6"><br>
    
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">First Name*:</label>
        <div class="col-sm-8">
            
            <input type="text"    class="form-control" id="fname" placeholder="Enter first name" style="background-color:#5bc0de" name="fname" required >
      </div>
	</div>
	<div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Last Name*</label>
      <div class="col-sm-8">          
        <input type="text" class="form-control" id="lname" placeholder="Enter Last name"  name="sname">
      </div>
	</div>
	
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">Password*:</label>
        <div class="col-sm-8">
            
            <input type="password"   class="form-control" id="pass" placeholder="Enter Password " name="passwordone" style="background-color:#5bc0de"  >
      </div>
	</div>
	<div class="form-group">
        <label class="control-label col-sm-4" for="pwd">ConfirmPassword*:</label>
        <div class="col-sm-8">
            
            <input type="password"   class="form-control" id="spass" oninput="myconpass()"  placeholder="Confirm Password " name="passwordtwo" >
            <p id="demo"></p>
      </div>
	</div>
        
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Email*</label>
      <div class="col-sm-8">          
          <input type="email" class="form-control" id="myInput" oninput="myFunction()"  placeholder="Enter e-mail" name="mail"  data-validate="required,email" style="background-color:#5bc0de">  
                           <p id="ma"></p>
      </div>
    </div>

    </div>
      
       
      
	  <div class="col-sm-6"><br>
	  
	  	
	<div class="form-group">
        <label class="control-label col-sm-4" for="email">Manager's Name*:</label>
        <div class="col-sm-8">

             <input type="pass" class="form-control" id="mname" placeholder="Manager's name" name="name" style="background-color:#5bc0de">
             <p id = "status"></p>
      </div>
	</div>	
    <div class="form-group">
        <label class="control-label col-sm-4" for="email">Manager's Code*:</label>
        <div class="col-sm-8">

            <input type="password" class="form-control" id="mcode" placeholder="Manager's Code" name="code"  >
              <p id = "hello"></p>
      </div>
	</div>

    <div class="form-group">
      <label class="control-label col-sm-4" for="email">Phone Number*:</label>
      <div class="col-sm-8">
          <input type="text" class="form-control" id="phone"    placeholder="Enter phone number" name="phone" style="background-color:#5bc0de" >
      <p id="phone"></p>
      </div>
    </div>
            
	
    <div class="form-group">
      <label class="control-label col-sm-4" for="pwd">Role*</label>
      <div class="col-sm-8">          
          <input class="form-control" id="add" placeholder="Enter Address" name="role" >
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


$("#mname").on("keydown keyup", function() {
        myFunctionadmin();
    });
    function myFunctionadmin(){
        var name = document.getElementById("mname").value;
       console.log(name);
        if(x.includes(name)){
           console.log("hehehhehe");
            $("#status").text("\u2713 Available"); 

        }else{
            $("#status").text(""); 
            
        }
    }
    $("#mcode").on("keydown keyup", function() {
        myFunctionnow();
    });
    function myFunctionnow(){
        var code = document.getElementById("mcode").value;
       console.log(code);
        if(y.includes(code)){
           console.log("eheheheheeh");
            $("#hello").text("\u2713 Available"); 
            var fincode = code;
           console.log("the final code is fincode");
           console.log(fincode);
            

        }else{
            $("#hello").text(""); 
            
        }
    }
    $('#pay').click(function (){
   
      var now =   document.getElementById("mname").value;
      
     console.log(now);  
       var inval =   document.getElementById("mcode").value; 
      console.log(inval);  
      if(y.includes(inval) && x.includes(now)){
         document.getElementById("pay").disabled = false;
        
    }else{
        alert("The code you entered and the Name you entered are not present in the database");
        return false;
    }
   
    
});

  







 
    
</script> 

</form   



	</body>
	</html>

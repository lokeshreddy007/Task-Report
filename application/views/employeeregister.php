<html>
<head>
<title>Employee Register</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.text {
  color: black;
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
    width: 510px;
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
   position:fixed;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   background:#6cf;
}
</style>
<script>
function myFunction() {
    var x = document.getElementById("myInput").value;   
    var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (pattern.test(x)) {
        document.getElementById("ma").innerHTML =  "<p style='color:green'></p>";
    }
    else {
        document.getElementById("ma").innerHTML =  "<p style='color:red'><i>Please Enter Vaild Email</i></p>";
    }
}
function myconpass() {
    var pass = document.getElementById("pass").value;
    var conpass = document.getElementById("spass").value; 
    if (pass == conpass) {
        document.getElementById("demo").innerHTML =  "<p style='color:green'></p>";    
    }
    else {
        document.getElementById("demo").innerHTML =  "<p style='color:red'><i>Please Enter same password</i></p>";
    }
}
</script>
</head>
<body>
    <div id="header">
        <h2><center>Empolyee Registeration</font></center></h2>
    </div>
    <div id="container">
    <?php   
        $code = array();
        $name = array();
        foreach($output as $i){
            array_push($code,$i->code);
            array_push($name,$i->name);
        }
    ?>
    <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/insertregister" method="post">
        <font color="red"> <?php echo $this -> session->flashdata("Created"); ?></font>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Last Name*</label>
            <div class="col-sm-8">          
                <input type="text" class="form-control" id="lname" placeholder="Enter Last name"  name="sname">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">First Name*</label>
            <div class="col-sm-8">
                <input type="text"    class="form-control" id="fname" placeholder="Enter first name" name="fname" required >
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Password*</label>
            <div class="col-sm-8">
                <input type="password"   class="form-control" id="pass" placeholder="Enter Password " name="passwordone">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Confirm Password*</label>
            <div class="col-sm-8">
                <input type="password"   class="form-control" id="spass" oninput="myconpass()"  placeholder="Confirm Password " name="passwordtwo" >
                <p id="demo"></p>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Email Address*</label>
            <div class="col-sm-8">          
                <input type="email" class="form-control" id="myInput" oninput="myFunction()"  placeholder="Enter e-mail" name="mail"  data-validate="required,email">  
                <p id="ma"></p>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Manager's Name</label>
            <div class="col-sm-8">
                <input type="pass" class="form-control" id="mname" placeholder="Manager's name" name="name">
                <p id = "status"></p>
            </div>
        </div>  
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Phone Number*</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="phone"    placeholder="Enter phone number" name="phone">
                <p id="phone"></p>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="pwd">Role*</label>
            <div class="col-sm-8">          
                <input class="form-control" id="add" placeholder="Enter Address" name="role" >
            </div>
        </div>
		<div style="text-align: center;">
        <button  id ="pay" type="submit"  class="btn btn-primary">Submit</button>
		</div>
    </form>
    <script> 
        var y = <?php echo json_encode($code); ?>;
        var x = <?php echo json_encode($name);?>;
        $("#mname").on("keydown keyup", function() {
            myFunctionadmin();
        });
        function myFunctionadmin() {
            var name = document.getElementById("mname").value;
            console.log(name);
            if (x.includes(name)) {
                console.log("hehehhehe");
                $("#status").text("\u2713 Available"); 
            }
            else {
                $("#status").text(""); 
            }
        }
        $("#mcode").on("keydown keyup", function() {
            myFunctionnow();
        });
        function myFunctionnow() {
            var code = document.getElementById("mcode").value;
            console.log(code);
            if (y.includes(code)) {
                console.log("eheheheheeh");
                $("#hello").text("\u2713 Available"); 
                var fincode = code;
                console.log("the final code is fincode");
                console.log(fincode);
            }
            else {
                $("#hello").text(""); 
            }
        }
        $('#pay').click(function () {
            var now =   document.getElementById("mname").value;
            console.log(now);  
            var inval =   document.getElementById("mcode").value; 
            console.log(inval);  
            if (y.includes(inval) && x.includes(now)) {
                document.getElementById("pay").disabled = false;
            }
            else {
                alert("The code you entered and the Name you entered are not present in the database");
                return false;
            }
        });
    </script>
    </div>
    <div id="footer">
        <div class="text"><h7><center>Copyright © <?php echo date("Y"); ?> All rights reserved</center></h7></div>
    </div>
    </body>
</html>

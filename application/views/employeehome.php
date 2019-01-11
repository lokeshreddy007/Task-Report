
<html>
<head>
<title>Employee Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="http://testing.e-gits.com/www/https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://testing.e-gits.com/www/https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- load jQuery and jQuery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<!-- load jQuery UI CSS theme -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="<?php echo base_url();?>imports/mdtimepicker.css">
<script src="<?php echo base_url();?>imports/mdtimepicker.js"></script>
<style>
.text {
  color: white;
  font-size: 12px;
  text-align: center;
  padding:5px;
}
#container {
    width: 500px;
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
   height:50px;   /* Height of the footer */
   background:#6cf;
}
</style>
</head>
<body>
<?php $id = intval($_GET['id']);?>

<?php

$emploeeuserid = $_SESSION['emploeeuserid'];  
?>
<?php if($id == $emploeeuserid){?>
<div id="container" style="border-style: solid; border-width: 1px;border-radius: 15px;background-color: white;">
    <h2 style="text-align: center;"></h2>
    <div class="row">
    <form class="form-horizontal" name="myForm" onsubmit="return validateForm()" action="<?php echo base_url();?>Welcome/insertreport" method="post">
       <font color="red"> <?php echo $this -> session->flashdata("Created"); ?></font>
                  <!-- <font color="red"> <i><?php echo $this -> session->flashdata("Created"); ?></i></font> -->

            <input type="hidden" value="4" name ="empid"/>
            <div class="form-group">
                <label class="control-label col-sm-4">Date*:</label>
                <div class="col-sm-8">
                    <input type="data" id="datepicker" class="form-control" placeholder="Enter date" name="fromdata" >
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
                    <input type="text"   class="form-control" id="pass" placeholder=" Form" name="breakstart">
                </div>
                <div class="col-sm-4">
                    <input type="text"   class="form-control" id="pass2" placeholder="To " name="breakend">
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
                    <input type="text" class="form-control" id="myInput"   placeholder="Enter Rounding" name="rounding">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Total*:</label>
                <div class="col-sm-8">
                    <input type="pass" class="form-control"  placeholder="Enter Total" name="total">
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
                    <input type="text" class="form-control" id="phone"    placeholder="Enter project" name="project">
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
            <button id="pay" type="submit" class="btn btn-primary">Submit</button>
        </form>
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
 <?php  }else{?>
     <?php redirect(base_url() ); ?>

       <?php } ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link  href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			<link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="<?php echo base_url();?>imports/mdtimepicker.css">
<script src="<?php echo base_url();?>imports/mdtimepicker.js"></script>
    <title>Document</title>
</head>
<body>
        <?php 
             $url = $_SERVER["REQUEST_URI"];
            
           $arr = explode("/",$url);
            $now = $arr;
            $len = count($now);
            $val = $len -1;
            $iddate =  $now[$val];
                 ?>

				 <!-- Modal container start from here  -->		
				
                 <div class="container">

<!-- Modal -->
<!-- <div class="modal fade" id="myModal" role="dialog"> -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
    <!-- <h2 style="text-align: center;padding:0px;margin:0px;">hello </h2> -->
    <form class="form-horizontal"  action="<?php echo base_url();?>Welcome/insertreportedit" method="post">

      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title" style="text-align: center;padding:0px;margin:0px;" >Date:<?php echo $iddate;?></h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Start time*</label>
              <div class="col-sm-8">
                  <input type="text"  class="form-control" id="timepicker" placeholder="Enter Start Time" name="stime"/>
              </div>
          </div>
          
          <div class="form-group">
              <label class="control-label col-sm-4" for="pwd">Break*:</label>
              <div class="col-sm-8">
              <select  class="col-sm-12" name="D1">
				    <option value="0:30">0:30</option>
                    <option value="0:30">0:45</option>
					<option value="1:00">1:00</option>
					<option value="1:30">1:30</option>
					<option value="2:00">2:00</option>
					</select>
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
              <label class="control-label col-sm-4" for="pwd">workdetails*</label>
              <div class="col-sm-8">
                  <textarea class="form-control" id="pwd" placeholder="Enter workdetails" name="work"></textarea>
              </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" value="Submit" >Close</button>
      </div>
    </div>
  </div>
                            <!-- Modal container end  from here  -->

<!-- </div>

</div> -->
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
	$("#edit").click(function(){
		console.log(document.getElementById("edit").value );
}); 
</script>
</body>
</html>
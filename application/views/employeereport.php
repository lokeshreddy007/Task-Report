<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Emplooyee report</title>
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
				<style type="text/css">
					.tg  {border-collapse:collapse;border-spacing:0;border-color:#999;margin:0px auto;border: 5px solid #26ADE4;border-radius: 10px;}
					.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#444;background-color:#F7FDFA;}
					.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:20px 20px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#999;color:#fff;background-color:#329a9d;}
					.tg .tg-0pky{border-color:inherit;text-align:center;vertical-align:center}
					.tg .tg-28l8{background-color:#ffffff;border-color:inherit;text-align:center}
					@media screen and (max-width: 767px) {.tg {width: auto !important;}.tg col {width: auto !important;}.tg-wrap {overflow-x: auto;-webkit-overflow-scrolling: touch;margin: auto 0px;}}
					#container {
					width: 100%;
					color: #1e73b9;
					height: auto;
					padding:30px;
					margin:auto;
					}
				</style>
			</head>
			<body>
				<?php $id = intval($_GET['id']);?>
				<?php $emploeeuserid = $_SESSION['emploeeuserid'];  ?>
				<?php if($id == $emploeeuserid){?>
				<div id="container">
					<div class="tg-wrap"><table class="tg">
							<tr>
								<th colspan="10" style="background-color:#ffffff;">
									<button onclick="window.location.href='<?php echo base_url(); ?>Welcome/weekdaysforincrement'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
									<select name="filter" style="height: 34px;background-color:#26ADE4;border-radius: 5px;">
										<option value="Week">Week</option>
										<option value="Month">Month</option>
										<option value="Year">Year</option>
									</select>
									<button onclick="window.location.href='<?php echo base_url(); ?>Welcome/weekdaysfordecrement'" style="text-align: center;" type="button" class="btn btn-success">Previous</button>
									<button onclick="window.location.href='<?php echo base_url(); ?>Welcome/ExportCSV'" style="text-align: center;" type="button" class="btn btn-success">Export</button>
								</th>
							</tr>
							<tr>
								<th class="tg-0pky">Date</th>
								<th class="tg-0pky">Start Time</th>
								<th class="tg-0pky">Break</th>
								<th class="tg-0pky">End Time</th>
								<th class="tg-0pky">Rounding</th>
								<th class="tg-0pky">Total</th>
								<th class="tg-0pky">Project</th>
								<th class="tg-0pky">Category</th>
								<th class="tg-0pky">Comments</th>
								<th class="tg-0pky">Action</th>
							</tr>
							<tr>
								<?php $num = 1;?>
								<?php foreach($viewdata as $data){ ?>
								<?php if($data->empid == $emploeeuserid ){?>
								
								<td class="tg-0pky"><?php echo $data->date;?></td>
								<td class="tg-0pky"><?php echo $data->strattime;?></td>
								<td class="tg-0pky">
									<select name="D1">
										<option value="0:30">0:30</option>
										<option value="1:00">1:00</option>
										<option value="1:30">1:30</option>
										<option value="2:00">2:00</option>
									</select>
								</td>
								<td class="tg-0pky"><?php echo $data->endtime;?></td>
								<td class="tg-0pky"><?php echo $data->rounding;?></td>
								<td class="tg-0pky"><?php echo $data->total;?></td>
								<td class="tg-0pky"><?php echo $data->project;?></td>
								<td class="tg-0pky"><?php echo $data->cat;?></td>
								<td class="tg-0pky">
									<textarea name="message" rows="2" cols="70">
										<?php echo $data->workdetails;?>
									</textarea>
								</td>
								
				 <!-- Modal container start from here  -->		
				
				<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $data->project;?></h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Start time*</label>
                <div class="col-sm-8">
                    <input type="text"  class="form-control" id="timepicker" placeholder="Enter Start Time" name="stime"/>
                </div>
            </div>
			</br> </br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Break*:</label>
                <div class="col-sm-8">
                    <input type="text"   class="form-control" id="pass" placeholder=" Form" name="breakstart">
                </div>   
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Endtime*:</label>
                <div class="col-sm-8">
                    <input type="text"   class="form-control" id="timepicker2"  placeholder="Enter End time  " name="etime" >
                </div>
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Rounding*</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="myInput"   placeholder="Enter Rounding" name="rounding">
                </div>
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Total*:</label>
                <div class="col-sm-8">
                    <input type="pass" class="form-control"  placeholder="Enter Total" name="total">
                </div>
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Custome*:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" placeholder="Enter Code" name="custome"  >
                </div>
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="email">Project*:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="phone"    placeholder="Enter project" name="project">
                <p id="phone"></p>
                </div>
            </div>
			</br></br>
            <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">workdetails*</label>
                <div class="col-sm-8">
                    <textarea class="form-control" id="pwd" placeholder="Enter workdetails" name="work"></textarea>
                </div>
            </div>
        </div>
		</br></br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <input type="button" value="Submit" onclick="window.location.href='<?php echo base_url();?>/Welcome/insertdata?id<?php echo $data->project;?>'" />
        </div>
      </div>
      
    </div>
  </div>
  
</div>
							<!-- Modal container end  from here  -->	
								<td class="tg-0pky">
									<button id="edit" style="text-align: center;" type="button" value="<?php echo $data->date;?> " class="btn btn-success" data-toggle="modal" data-target="#myModal">Edit</button>
								</td>
								<?php $num ++;?>
								<tr/>
								<?php } ?>
								<?php } ?>
							</tr>
						</table></div>
				</div>			
			</body>
			<?php } else{?>
			<?php redirect(base_url() ); ?>
			<?php } ?>
			
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
	$("#edit").click(function(){
		console.log(document.getElementById("edit").value );
}); 
</script>
			
			<script>
				var $rows = $('#table tr');
				$('#search').keyup(function() {

				var val = '^(?=.*\\b' + $.trim($(this).val()).split(/\s+/).join('\\b)(?=.*\\b') + ').*$',
				reg = RegExp(val, 'i'),
				text;

				$rows.show().filter(function() {
				text = $(this).text().replace(/\s+/g, ' ');
				return !reg.test(text);
				}).hide();
				});
			</script>
		</html>
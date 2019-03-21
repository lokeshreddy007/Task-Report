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
				<?php $empname = $_SESSION['emploeeusername'];?>
				<div id="container">
					<div class="tg-wrap"><table class="tg">
							<tr>
								<th colspan="10" style="background-color:#ffffff;">
									<button onclick="window.location.href='<?php echo base_url(); ?>Welcome/weekdaysfordecrement'" style="text-align: center;" type="button" class="btn btn-success">Previous</button>
									<select id="duration" name="filter" onchange="getduration()" style="height: 38px;background-color:#26ADE4;border-radius: 5px;">
											<option value="<?php echo  $_SESSION["duration"];?>"> <?php echo  $_SESSION["duration"];?></option>
											<?php if ($_SESSION['duration'] == "Week") {?>
													<option value="Month">Month</option>
								<?php	} ?>
									<?php if ($_SESSION['duration'] == "Month") {?>
										<option value="Week">Week</option>
											<?php	} ?>
									</select>
									<button onclick="window.location.href='<?php echo base_url(); ?>Welcome/weekdaysforincrement'" style="text-align: center;" type="button" class="btn btn-success">Next</button>
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
								<td class="tg-0pky">
									<button style="text-align: center;" type="button" class="btn btn-success">Edit</button>
								</td>
								<?php $num ++;?>
								<tr/>
								<?php } ?>
								<?php } ?>
							</tr>
						</table></div>
				</div>
			</body>

			<script>
			function getduration() {
				var selValue = document.getElementById("duration").value;
				console.log(selValue);
				$.post("<?php echo base_url(); ?>Welcome/getdurationajax", {res_id:selValue});
		}
</script>
			</script>
		</html>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Emplyee report</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
             <link  href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
             <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
             <style>
	h1{
    margin-top: -40px;
    margin-bottom: 10px;
}
  
	.Back{
        
		right: 3px;
		padding : 10px;
		text-align: right;
		display: inline-block;
		width: 100%;
		margin-right: -50%;
	}
	.feed1 {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton1 {
  position: fixed;
  bottom: -4px;
  left: 10px;
}
     
      .feed {
  background-color : #31B0D5;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  border-color: #46b8da;
}

#mybutton {
  position: fixed;
  bottom: -4px;
  right: 10px;
}
	tr:nth-child(even) {
	  background-color: #5bc0de;
	}  
   
	</style>
	</head>
	<body>
             <?php $adminuserid = $_SESSION['adminuserid'];  ?>
            <?php if(!empty($adminuserid)) {?>
            <div class="container">
			<div class="Back">
<INPUT TYPE="button" style="text-align: center" type="button" class="btn btn-success" VALUE="Back" onClick="history.go(-1);">
				<!--<button onclick="window.location.href='<?php echo base_url();?>Managementcontrol/Conformorder?id=<?php echo $id; ?>'" style="text-align: center;" type="button" class="btn btn-success">Next</button>-->
				<button onclick="window.location.href='<?php echo base_url();?>Welcome/adminhome'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

			</div>
             <?php $id = intval($_GET['id']);?>
            <?php foreach($employeename as $data){ ?>
    <?php if($data->id == $id ){?>
            <?php $name = $data->fname;?>
    <?php }?>
            <?php }?>
	 <h1 style="text-align: center;"><b><?php echo $name;?> Report</b></h1>
			<div class="form-group">
				<!-- <div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div> -->
			</div>
			<br />
	 <form class="form-inline" action="<?php echo base_url();?>Welcome/getreportbydates" method="post">
   <input type="hidden" name="id" value="<?php echo $id;?> " />

  <div class="form-group">
      <p>Enter From Date: <input type = "text" name="fromdate" id = "datepicker-13"></p>
  </div>
  <div class="form-group">
      <p>Enter To Date: <input type = "text" name="enddate" id = "datepicker-14"></p>		
  </div>
             <div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>  </div>
</form> 
<input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder=" Search Here">
<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
        <tr>
             <th>S.NO</th>
            <th>Date</th>
            <th>Start Time</th> 
              <th>Break Time</th>
               <th>End Time</th>
               <th>Rounding </th>
               
               <th>Total</th>
                <th>Customer</th>
                  <th>Project</th>
                   <th>cat</th>
                    <th>Work details</th>
             </tr>
              <tbody >							
    
	 
                
<tr>
<?php $num = 1;?>
				<?php foreach($output as $data){ ?>
    <?php if($data->empid == $id ){?>
	<td> <?php echo $num;?> </td>
	<td><?php echo $data->date; ?> </td>
         <td><?php echo $data->strattime; ?> </td>
         <td> <?php echo $data->breaks;?> to <?php echo $data->breaks;?></td>
	<td><?php echo $data->endtime; ?> </td>
	<td><?php echo $data->rounding; ?> </td>
        <td><?php echo $data->total; ?> </td>
        
         <td><?php echo $data->custome; ?> </td>
          <td><?php echo $data->project; ?> </td>
           <td><?php echo $data->cat; ?> </td>
            <td><?php echo $data->workdetails; ?> </td>
                         <?php $num ++;?>                
                                       
                                        <tr/>
					<?php } ?>
                                        <?php } ?>
					<tr>

				


				</tbody>  
</table>
</div>
           <?php } else{?>
        
         <?php redirect(base_url() ); ?>
            <?php } ?>
	

	</body>
         <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            
         });
      </script>
       <script>
         $(function() {
            $( "#datepicker-14" ).datepicker();
           
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
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Admin Login</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
             <link  href=" https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
                <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
             <link href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"></link>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
				<?php if (!$this->session->userdata('Manager')) {?>
				<button onclick="window.location.href='<?php echo base_url();?>UserControl/createmanagercode'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>
		<?php }  else {?>
			<button onclick="window.location.href='<?php echo base_url();?>UserControl/createmanagercode'" style="text-align: center;" type="button" class="btn btn-success">HOME</button>

		<?php } ?>

			</div>
	 <h1 style="text-align: center;"><b>Employee List</b></h1>
			<div class="form-group">
				<!-- <div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div> -->
			</div>
			<br />
	
<input type="text"  align="center" border="1px" style="width:100%; line-height: 30px;" id="search" placeholder=" Search Here">
<table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">    
            
            
        <tr>
             <th>S.NO</th>
            <th>First Name</th>
            <th>Second Name</th> 
              <th>Email</th>
               <th>Phone Number</th>
               <th>Role </th>
               
               <th>View</th>
                <th>Delete</th>
            
           
            
             </tr>
              <tbody >							
    
	  
<tr>
<?php $num = 1;?>
				<?php foreach($output as $data){ ?>
				<td> <?php echo $num;?> </td>
					<!--<td><a href="<?php echo base_url(); ?>Managementcontrol/followup?id=<?php echo $data->iduser; ?>" /> <?php echo $data->iduser; ?></td>-->   
					<td><?php echo $data->fname; ?> </td>
                    <td><?php echo $data->sname; ?> </td>
                    
                                        <?php $id = $data->id;?>
					<td><?php echo $data->mail; ?> </td>
					<td><?php echo $data->phonenumber; ?> </td>
                    <td><?php echo $data->role; ?> </td>
                                        
                                        <td><a href="<?php echo base_url();?>Welcome/showinfo?id=<?php echo $id; ?>"<i class="material-icons" style="font-size:20px">arrow_forward</i> 
<td><a href="<?php echo base_url();?>Welcome/deleteemp?id=<?php echo $id; ?>"<span class="glyphicon glyphicon-trash"></span></a>
 <?php $num ++;?>
                                        <tr/>
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
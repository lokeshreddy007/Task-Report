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
.text {
  color: black;
  font-size: 12px;
  text-align: center;
  padding:5px;
}
#header {
    color: #1e73b9;
}
#container {
    width: 70%;
    color: #1e73b9;
    height: auto;
    padding:30px;
    margin:auto;
}
#footer {
   position:fixed;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   background:#6cf;
}
</style>
</head>
<body>
    <?php $adminuserid = $_SESSION['adminuserid'];  ?>
    <?php if(!empty($adminuserid)) {?>
    <div id="header">
        <h2><center>Projects List</font></center></h2>
    </div>
    <div id="container">
        <table id="table" class="table" align="center" border="1px" style="width:100%; line-height: 30px;">
		    <tr>
				<select style="width:150px; height:30px">
				  <option value="None">None</option>
				  <option value="Project 1">Project 1</option>
				  <option value="Project 2">Project 2</option>
				  <option value="Project 3">Project 3</option>
				  <option value="Project 4">Project 4</option>
				</select>
            </tr>
            <tr>
                <th>Customer</th>
                <th>Category</th> 
                <th>PO</th>
                <th>Edit</th>
            </tr>
            <tbody >                            
            <tr>
                <?php $num = 1;?>
                <?php foreach($output as $data){ ?>
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
	<div id="footer">
		<div class="text"><h7><center>Copyright © 2019 All rights reserved</center></h7></div>
    </div>
    <?php } else { ?>
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
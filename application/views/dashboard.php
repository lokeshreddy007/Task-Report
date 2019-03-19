<!DOCTYPE html>
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
#container {
   width: 600px;
   color: #1e73b9;
   height: auto;
   padding:30px;
   margin:auto;
}
#header {
    color: #1e73b9;
}
#footer {
   position:fixed;
   bottom:0;
   width:100%;
   height:30px;   /* Height of the footer */
   background:#6cf;
}
.chart div {
    border-style: solid;
    border-width: 1px;
    border-radius: 10px;
    font: 15px sans-serif;
    background-color: steelblue;
    text-align: left;
    padding: 3px;
    margin: 1px;
    color: white;
}
</style>
</head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Month'],
  ['Work',22],
  ['Eat', 2],
  ['TV', 4],
  ['Gym', 2],
  ['Sleep', 8]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
<body>
    <div id="header">
        <h2><center>Dashboard</font></center></h2>
    </div>
    <div id="container">
        <div id="piechart"></div> 
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 1</label>
            <div class="col-sm-8">
            <div class="chart">
               <div style="width: 40px;">4</div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 2</label>
            <div class="col-sm-8">
            <div class="chart">
              <div style="width: 80px;">4</div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 3</label>
            <div class="col-sm-8">
            <div class="chart">
              <div style="width: 150px;">4</div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 4</label>
            <div class="col-sm-8">
            <div class="chart">
              <div style="width: 160px;">4</div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 5</label>
            <div class="col-sm-8">
            <div class="chart">
              <div style="width: 420px;">4</div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-4" for="email">Employee 6</label>
            <div class="col-sm-8">
            <div class="chart">
              <div style="width: 230px;">4</div>
            </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <div class="text"><h7><center>Copyright © <?php echo date("Y"); ?> All rights reserved</center></h7></div>
    </div>

</body>
</html>
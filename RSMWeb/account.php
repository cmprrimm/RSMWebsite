<!DOCTYPE html>
<html lang="en">
<head>
<title>RSM GP Access</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script type="text/javascript"
	src="https://www.gstatic.com/charts/loader.js"></script>
 <?php include "Includes/navBar.php" ?>
</head>
<body>
	<div id=ourServicesJumbo class="jumbotron-fluid">
		<h1 class="display-4">GP Account</h1>
	</div>
	<form>
		<div class="form-row justify-content-center">
			<div class="form-group col-md-6">
				<label for="patientEmail">Create a Patient Account</label> <input
					type="email" class="form-control" id="patientEmail"
					placeholder="Email">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">Create Patient</button>
	</form>
	
	<table>
		<tr class="header">
			<th id="piechart"></th>
			<th id="piechart2"></th>
			<th id="piechart3"></th>
			<th id="piechart4"></th>
	
	</table>
</body>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
google.charts.setOnLoadCallback(drawChart2);
google.charts.setOnLoadCallback(drawChart3);
google.charts.setOnLoadCallback(drawChart4);

// Draw the chart for patient covid symptoms
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Covid Symptoms', 'Patient totals'],
  ['Cough', 8],
  ['Respitory Problems', 2],
  ['Temperature', 2],
  ['Loss of Appetite', 2],
  ['Loss of Taste and Smell', 2],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Patients with Covid Symptoms', 'width':500, 'height':500};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data,  options);
  }
  

// Draw the chart for patient covid symptoms
function drawChart2() {
  var data = google.visualization.arrayToDataTable([
  ['Covid Symptoms', 'Patient tested'],
  ['Yes', 8],
  ['No', 8],
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Patients Tested for Covid', 'width':500, 'height':500};


  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
  chart.draw(data,  options);
  }

//Draw the chart for patient covid symptoms
function drawChart3() {
  var data = google.visualization.arrayToDataTable([
  ['Covid Symptoms', 'Test Results'],
  ['Positive', 8],
  ['Negative', 2],

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Patients Covid Results', 'width':500, 'height':500};


  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
  chart.draw(data,  options);
  }

//Draw the chart for patient covid symptoms
function drawChart4() {
  var data = google.visualization.arrayToDataTable([
  ['Covid Symptoms', 'Patient totals'],
  ['Yes', 8],
  ['No', 8],

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Patients Hospitalised with Covid', 'width':500, 'height':500};
  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart4'));
  chart.draw(data,  options);
  }
  
  
</script>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Patient Search</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
 <?php include "Includes/navBar.php" ?>
</head>
<body>
	<div id=ourServicesJumbo class="jumbotron-fluid">
		<h1 class="display-4">Patient Search</h1>
	</div>
		<input type="text" id="myInput" class="col-md-6" onkeyup="myFunction()" placeholder="Search for names..">

	<table id="myTable" >
		<tr class="header">
			<th style="width: 10%;">Name</th>
			<th style="width: 15%;">Address</th>
			<th style="width: 10%;">DOB</th>
			<th style="width: 10%;">Email</th>
			<th style="width: 10%;">Gender</th>
			<th style="width: 10%;">Contact Number</th>
			<th style="width: 10%;">Smoker</th>
			<th style="width: 10%;">Pregnant</th>
			<th style="width: 10%;">Medical Conditions</th>
			<th style="width: 10%;">Covid Syptoms</th>
		</tr>
		<tr>
			<!-- Name of Patient -->
			<td>Robert Rimmer</td>
			<!-- Address -->
			<td>52 november road l138bw</td>
			<!-- DOB -->
			<td>13/13/13</td>
			<!-- Email -->
			<td>rob@rob.com</td>
			<!-- Gender -->
			<td>Male</td>
			<!-- Contact No -->
			<td>07722109714</td>
			<!-- Smoker -->
			<td>yesssss</td>
			<!-- pregnant -->
			<td>No</td>
			<!-- Medical Conditions -->
			<td>None</td>
			<!-- Covid Symptoms -->
			<td>No</td>

		</tr>
		<tr>
			<!-- Name of Patient -->
			<td>Nicholas Scarf</td>
			<!-- Address -->
			<td>92 huyton street </td>
			<!-- DOB -->
			<td>13/13/13</td>
			<!-- Email -->
			<td>nick@nick.com</td>
			<!-- Gender -->
			<td>Male</td>
			<!-- Contact No -->
			<td>012211222</td>
			<!-- Smoker -->
			<td>No</td>
			<!-- pregnant -->
			<td>No</td>
			<!-- Medical Conditions -->
			<td>None</td>
			<!-- Covid Symptoms -->
			<td>No</td>
		</tr>
		<tr>
			<!-- Name of Patient -->
			<td>Robby McGammon</td>
			<!-- Address -->
			<td>Potato</td>
			<!-- DOB -->
			<td>Potato</td>
			<!-- Email -->
			<td>Potato</td>
			<!-- Gender -->
			<td>Potato</td>
			<!-- Contact No -->
			<td>Potato</td>
			<!-- Smoker -->
			<td>Potato</td>
			<!-- pregnant -->
			<td>Potato</td>
			<!-- Medical Conditions -->
			<td>Potato</td>
			<!-- Covid Symptoms -->
			<td>Potato</td>

		</tr>
	</table>

</body>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</html>

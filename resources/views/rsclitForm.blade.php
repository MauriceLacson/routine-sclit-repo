<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Form</title>
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="../asset/css/MyForm.css" type="text/css">
	<link rel="stylesheet" href="../asset/css/bootstrap.min.css" type="text/css">
</head>
<body>
	
	<div id="div1">
		<!-- <div>Current Time: <span id="showTime"></span></div> -->
		<div id="heading1"><h3>Routine SCLIT</h3></div>
		<div id="formDiv" class="form-group">
		
			<form id="form1" class="">
				<div>
					<label for="machineNum"><span class="labelSpan">Machine No.</span>
					</label>
					<input id="machineNum" name="machineNum" class="form-control" type="text" placeholder=""><br>
				</div>
				
				<div>
					<label for="model"><span class="labelSpan">Model No.</span>
					</label>
					<input id="model" name="model" class="form-control" type="text" placeholder=""><br>
				</div>
				
				<div>
					<label for="package"><span class="labelSpan">Package</span>
					</label>
					<input id="package" name="package" class="form-control" type="text" placeholder=""><br>
				</div>

				<div>
					<label for="dlrSCLIT"><span class="labelSpan">Date Last Routine SCLIT</span>
					</label>
					<input id="dlrSCLIT" name="dlrSCLIT" class="form-control" type="date" placeholder=""><br>
				</div>
				
				<div>
					<label for="datePerf"><span class="labelSpan">Date Performed</span>
					</label>
					<input id="datePerf" name="datePerf" class="form-control" type="date" placeholder=""><br>
				</div>
				
				<div>
					<label for="workWeek"><span class="labelSpan">Work Week</span>
					</label>
					<input id="workWeek" name="workWeek" class="form-control" type="text" placeholder=""><br>
				</div>
				<button id="submitBtn" class="btn btn-primary" type="submit">submit</button>
			</form>
		</div>
	</div>

</body>
</html>
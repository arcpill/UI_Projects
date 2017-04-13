<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<style>
body {
  background-color: #2c3338;
  color: #ffffff;
}
hr {
border-width: 3px;
text-align:left;
}
select{
color: #2c3338;
}
.form-horizontal .control-label{
    text-align: left;
}

</style>
<body>

<div class="container">
<form class="form-horizontal" role="form">
	<div class="form-group">
		<div class= "row content">
			<img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/Pdf_by_mimooh.svg" class="img-thumbnail"  alt="Responsive image" width="70" height="70">
			<label class="control-label" for="name"><h4>Please fill out the form below to begin downloading</h4></label>
	</div>
	<hr align="left">
	<div class="form-group">
		<div class= "row content">
			<label class="control-label col-sm-3" for="name">First Name:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="name">
			</div>
			<label class="control-label col-sm-3" for="company">Company:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="company">
			</div>
		</div>
		<div class= "row content">
			<label class="control-label col-sm-3" for="name">Last Name:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="name">
			</div>
			<label class="control-label col-sm-3" for="company">Website:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="company">
			</div>
		</div>
		<div class= "row content">
			<label class="control-label col-sm-3" for="name">Email:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="name">
			</div>
			<label class="control-label col-sm-3" for="company">Position:</label>
			<div class="col-sm-3">
				<select class="form-control" id="sel1">
				<option>-- Select One</option>
				<option>Software Engineer</option>
				<option>Sr. Software Engineer</option>
				</select>
			</div>
		</div>
		<div class= "row content">
			<label class="control-label col-sm-3" for="name">Password:</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="name">
			</div>
			<label class="control-label col-sm-3" for="company">Phone:*</label>
			<div class="col-sm-3">
			<input type="text" class="form-control" id="company">
			</div>
		</div>
		<div class= "row content">
			<label class="control-label" for="name">* Setting your password will allow you to log back in and see our documents any time</label>
		</div>

	</div>
	<hr align="left" >
	<div class="form-group">
		<div class= "row content">
			<label class="control-label" for="name">PRIMARY service or product of interest: *</label>
		</div>
		<div class= "row content">
			<div class="col-sm-3">
				<select class="form-control" id="sel1">
				<option>-- Select One</option>
				<option>Service 1</option>
				<option>Service 2</option>
				</select>
			</div>
		</div>
		<div class= "row content">
			<label class="control-label" for="name">OTHER services or product of interest:</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Online Stratergy</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Web Design and Development</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Social Networking and Online Community</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Integrated Onine Campaigns</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Email Marketing Services (Stratergy,Design,Development)</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Email Marketing Software</label>
		</div>
	</div>
	<hr align="left" >
	<div class="form-group">
		<div class= "row content">
			<label class="control-label" for="name">When are you looking to implement a solution?* </label>
		</div>
		<div class= "row content">
			<div class="col-sm-3">
				<select class="form-control" id="sel1">
				<option>-- Select One</option>
				<option>Now</option>
				<option>Later</option>
				</select>
			</div>
		</div>
	</div>
	<hr align="left" >
	<div class="form-group">
		<div class= "row content">
			<label class="control-label" for="name">Yes! Subscribe</label>
		</div>
		<div class="checkbox">
			<label><input type="checkbox" checked="checked"> Receive feature and best practice articles on email marketing.Interactive design and online strategy</label>
		</div>
	</div>
</form>
</div>


</body>
</html>

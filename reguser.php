<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>

<body>
	<h1 align=center> REGISTER AN ACCOUNT </h1>
	<br><br>
	<form action="formact.php" method="post">
		<div class="container" align = center>
		<div class= "row">
			<div class = "col-sm-3"></div>
			<div class= "col-sm-6">
				<label><b>Name&nbsp;&nbsp; </b></label>
				<input type="text" placeholder="Enter Name" name="name" required>
			<hr>

				<label><b>Email&nbsp;&nbsp; </b></label>
				<input type="text" placeholder="Enter Email" name="email" required>
			<hr>
			
				<label><b>Roll&nbsp;&nbsp;  </b></label>
				<input type="roll" placeholder="Enter Roll Number" name="roll" required>
			
			<hr>
			
				<label><b>Phone&nbsp;&nbsp;  </b></label>
				<input type="phone" placeholder="Enter Phone Number" name="phone" required>
			
			<hr>
			
			<br>
			<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

			<div class="clearfix">
			<button type="button"  class="btn btn-secondary">Cancel</button>
			<button type="submit" name="submit" class="btn btn-success">Sign Up</button>
			</div>
			
			<br>
			</div>
		</div>
	</form>
</body>


<!doctype html>
<head>
	<title>Admin User Page</title>
	<link rel="stylesheet" href="../style/main.css">
	<link rel="stylesheet" href="../style/adminuserpage.css">
	<script src="../actions/adminuserpage.js"></script>
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>Clientlist</h1>
		</div>
		<!--adding contacts-->
		<div class="clientadd"><button id="ClientAdd">+ Add new client</button></div>
		<!--contact form that needs to be filled in-->
		<div class="clientaddForm">
			<label for="username">Username</label><input type="text" id="username" class="formFields" placeholder="Username">
			<label for="password">Password</label><input type="text" id="password" class="formFields" placeholder="Password">
			<br>
			<label for="role">Role</label>
    			<select class="role">
  					<option value="User">User</option>
  					<option value="Admin">Admin</option>
  					<option value="Service">Service</option>
				</select>
  			
			<br><br>
			<!--buttons for actual addition and cancelling-->
			<button id="Add">Add Now</button><button id="Cancel">Cancel</button>
		</div>
		
		</div>
		<div class="title">
			<h2>Available spots</h2>
		<div>
			<form class="spots" action="/action_page.php">
  				UsedSpots:<input class="spots" type="text" name="spots" value="from database" readonly><br>
  				TotalSpots:<input class="spots" type="text" name="spots" value="from database" readonly><br>
			</form>
			<br>
		</div>
		<br><br><br><br>
		<div class="title">
			<h2>Time spent parking</h2>
		<div>
			<div class="dateForm">
			<label for="datestart">Date Start</label><input type="date" id="datestart" class="formFields">
			<label for="datestart">Date End</label><input type="date" id="dateend" class="formFields">
			<div class="dateData">
			</div>

			
		
		</div>
	</div>
</body>
</html>
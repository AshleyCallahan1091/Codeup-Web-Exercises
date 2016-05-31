<?php
	var_dump($_GET);
	var_dump($_POST);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My First HTML Form</title>
	</head>
	<body>
		<form method="POST" action="/my_first_form.php">
		<p>
		<label for="username">Username</label>
		<input  id="username" name="username" type="text" placeholder="Enter Username">
	</p>
	<p>
		<label for="password">Password</label>
		<input id="password" name="password" type="password" placeholder="Enter Password">
	</p>
	<p>
		<button type="submit"> Hit me!</button>
	</p>
	</form>

	<form method="POST" action="/my_first_form.php">
			<div>
			<h1>Compose an Email</h1>
				<label for="to">To</label>
				<input id="to" name="to" type="text" placeholder="To">
			</div>
			<div>
				<label for="from">From</label>
				<input id="from" name="from" type="text" placeholder="From">
			</div>
			<div>
				<label for="subject">Subject</label>
				<input id="subject" name="subject" placeholder="Subject" autofocus>
			</div>
			<div>
				<textarea id="email_body" name="email_body" rows="5" cols="50" >Body</textarea>
			</div>
			<input type="checkbox" id="saved_copy" name="saved_copy" value="yes" checked>
			<label for="saved_copy">Would you like a copy saved to your Sent folder?</label>
			<div>
				<button type="submit">Send</button>
			</div>
		</form>

		<form method="POST" action="/my_first_form.php">
			<div>
			<h1>Multiple Choice Test</h1>
			</div>
			<div>
				How many states are in the United States?
			</div>
			<div>
				<label>
					<input type="radio" name="q1" value="30" checked>
					30
				</label>
				<label>
					<input type="radio" name="q1" value="45">
					45
				</label>
				<label>
					<input type="radio" name="q1" value="50">
					50
				</label>
				<label>
					<input type="radio" name="q1" value="543">
					543
				</label>
			</div>
				
			<div>
				What year is it?
			</div>
			<div>

				<label>
					<input type="radio" name="q2" value="2015" checked>
					2015
				</label>
				<label>
					<input type="radio" name="q2" value="2016">
					2016
				</label>
				<label> 
					<input type="radio" name="q2" value="12748392">
					12748392
				</label>
				<label>
					<input type="radio" name="q2" value="2017">
					2017
				</label>
				</div>
				<div>
				<button type="submit">Submit</button>
				</div>
			<div> 
				Which artists do you like?
			</div>
			<div>
				<label>
					<input type="checkbox" id="os1" name="os[]" value="trading_yesterday">Trading Yesterday
				</label>
				<label>
					<input type="checkbox" id="os2" name="os[]" value="breaking_benjamin">
					Breaking Benjamin
				</label>
				<label>
					<input type="checkbox" id="os3" name="os[]" value="relient_k">
					Relient K
				</label>
				<label>
					<input type="checkbox" id="os4" name="os[]" value="taylor_swiftwift">
					Taylor Swift
				</label>
			</div>
			<div>
				<button type="submit">Submit</button>
			</div>

			<div>
			<form method="POST" action="http://requestb.in/1lw71oq1">
			<p>
			<h1>Select Testing</h1>
			</p>
				<label for="os"> Do you like Captain America?</label>
				<select id="captain_america" name="captain_america">
					<option value="1" selected>Yes</option>
					<option value="0">No, I'm not patriotic</option>
				</select>
				<button type="submit">Submit</button>
			</form>
			</div>


	</body>
	</html>

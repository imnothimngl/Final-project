<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="loginpageformat.css">
</head>
	<body>
		<div class="textbox"	style="text-align:center;">
			<form	method="post" action="display.php"><br><br>

					Full Name:<input type=text	name="fname"><br><br>
					Email Adress:<input type=text	name="Eaddrs"><br><br>
					Password:<input type="password" name="pass"><br><br>
					
					<label for="checkbox">Select Academic Level: </label>
						<select id="cmbMake" name="Make"  onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
								<option value="0">   </option>
									<option value="Freshman">Freshman</option>
										<option value="Sophomore">Sophomore</option>
											<option value="Junior">Junior</option>
												<option value="Senior">Senior</option>
						</select><br><br>
						
					Select Concentration: <br>
						<input type="radio" name="contact" id="contact_email" value="Information Technology"/>
						<label for="contact_email">Information Technology</label><br>
						
								<input type="radio" name="contact" id="contact_email" value="Computer Science"/>
								<label for="contact_email">Computer Science</label><br>
								
										<input type="radio" name="contact" id="contact_email" value="Information Systems"/>
										<label for="contact_email">Information Systems</label><br>
					
					<br><br><br>
						<input type="submit"	name="submit"><br><br>
		</form></div>
	</body>
</html>
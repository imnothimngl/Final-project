<?php

 session_start();
 $username = $password = "";
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
        input {
            border-radius: 15px;
            padding: 10px;
            border: 2px solid #ccc;
            width: 250px;
        }
    </style>
    <title>LoginPage</title>
    <link rel="stylesheet" type="text/css" href="teststyel.css">
</head>
<body>
	<div id="outlinebox">
		<div id="content">
			<form method="post" action="display.php">
        <h1> DUMAGUETE CITY</h1>
			<sup>by Duma Get ME</sup><br><br>
			
			Username:<br>
			<input type="text"	name="username"><br><br>
			
			Password:<br>
			<input type="Password"	name="password"><br><br>
							 
			<input type="submit"	name="submit"	id="subbutton"><br><br>
			</form>
    </div>
	</div>
</body>
</html>
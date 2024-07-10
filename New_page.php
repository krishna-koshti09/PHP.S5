<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Current Form Page</title>
</head>
<body>
	<table border="2">
    
    <form action="Newest_page.php" method="POST">
	    <legend>Information Form</legend>
	    Name<input type="text" name="name"><br>
	    Color<input type="text" name="color"><br>
	    Gender<input type="radio" name="gender" value="male"> Male
	    <input type="radio" name="gender" value="female"> Female
	    <br>
	    Branch
	    <select name="branch">
		    <option>BCA</option>
		    <option>MCA</option>
		    <option>IMSCIT</option>
	    </select>
	    <input type="submit" name="submit" value="submit">
	    </table>
</form>
</body>
</html>
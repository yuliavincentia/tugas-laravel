<!DOCTYPE html>
<html>
<head>
<title>form page </Title>
</headh>
<body>
<h1> Buat Account Baru! </h1>
<h2> Sign UP Form </h2>
	<form action="/form" method="POST">
		@csrf
		<label>First Name: </label>
			<br>
			<br>
			<input type="text" name="First Name"> 
			<br>
			<br>
		<label>Last Name:</label> 
			<br>
			<br>
			<input type="text" name ="Last Name">
			<br>
			<br>
		<label> Gender: </label>
			<br>
			<br>
			<input type="radio" name="gender" value="0">Male 
			<br>
			<input type="radio" name="gender" value="1">Female
	  		<br>
	  		<input type="radio" name="gender" value="2">Other 
			<br>
			<br>
		<label>Nationality</label>
			<select>
				<option>Indonesian</option>
				<option>Singapore</option>
				<option>Malaysian</option>
				<option>Germany</option>
			</select>
			<br>
			<br>
		<label>Language Spoken</label>
			<br>
			<input type="checkbox" name="language" value="0">Bahasa Indonesia
			<br>
			<input type="checkbox" name="language" value="1">English
			<br>
			<input type="checkbox" name="language" value="2">Other
			<br>
			<br>
		<label>Bio: </label>
			<br>
			<textarea cols="50" rows="7"> </textarea>
			<br>
			<br>
		<input type="submit"  name="Bio Data">

 
	</form>
</body>
</html>
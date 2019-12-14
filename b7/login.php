<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo login</title>
</head>
<body>
	<h1>Login </h1>
	<form action="server/handleLogin.php" method="post">
		<label for="user">username : </label>
		<input type="text" id="user" name="user">
		<br><br>
		<label for="pass">password : </label>
		<input type="password" id="pass" name="pass">
		<br><br>
		<label for="remember">Remember me</label>
		<input type="checkbox" id="remember" name="remember">
		<a href="#"> Forget password </a>
		<br><br>
		<button type="submit" name="login">Login</button>
	</form>
</body>
</html>
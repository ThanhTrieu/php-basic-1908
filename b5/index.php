<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<!-- su dung the a de gui du lieu len url trinh duyet bang method get -->
<a href="home.php?id=10&name=lphp1908&age=3"> send data to home.php </a>

<form action="home.php" method="get">
    <label for="user"> username</label>
    <input type="text" name="user" id="user">
    <br><br>
    <label for="pass"> password</label>
    <input type="password" name="pass" id="pass">
    <br><br>
    <button type="submit" name="btnLogin">Login</button>
</form>

<form action="server/total.php" method="post">
    <label for="number1"> number 1</label>
    <input type="text" name="number1" id="number1">
    <br><br>
    <label for="number2"> number 2</label>
    <input type="text" name="number2" id="number2">
    <br><br>
    <select name="gender">
        <option value="">--chon gioi tinh--</option>
        <option value="1"> Nam </option>
        <option value="0"> Nu </option>
    </select>
    <br><br>
    <input type="checkbox" name="agree" value="">
    <br><br>
    <input type="radio" name="radioCheck" value="100">
    <br><br>
    <button type="submit" name="btnSum">sum</button>
</form>
</body>
</html>

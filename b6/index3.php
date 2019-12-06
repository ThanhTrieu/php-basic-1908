<?php
$email = "test@gmail.com";
// kiem tra xem day co phai la email ko ?
// su dung filter_var (validate data) - tra ve true or false
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo "dung la dinh dang email";
} else {
	echo "khong dung dinh dang email";
}
echo "<br>";

$url = "https://vnexpress.net";
// kiem tra xem co phai url hay ko?
if(filter_var($url, FILTER_VALIDATE_URL)){
	echo "Dung la URL";
} else {
	echo "Ko phai URL";
}
echo "<br>";

// kiem tra xem thuc su co phai dinh dang true or false (boolean)
$chekFlag = true;
if(filter_var($chekFlag, FILTER_VALIDATE_BOOLEAN)){
	echo "OK";
} else {
	echo "FAIL";
}
echo "<br>";

$number = -123456;
$floatNumber = 3.14;

if(filter_var($number, FILTER_VALIDATE_INT)){
	echo "Yes";
} else {
	echo "No";
}
echo "<br>";
// xoa du lieu khong hop le
$email2 = "test học php dễ mà @gmail.com";
$newEmail = filter_var($email2, FILTER_SANITIZE_EMAIL);
echo $newEmail;
echo "<br>";

$url2 = "https://abc.com/home/10";
$newURL = filter_var($url2, FILTER_SANITIZE_URL);
echo $newURL;
echo "<br>";

$number2 = 3.14; //"abc12,3abc";
//$newNumber = filter_var($number2, FILTER_SANITIZE_NUMBER_INT);
$newNumber = filter_var($number2, FILTER_SANITIZE_NUMBER_FLOAT);
echo gettype($newNumber);








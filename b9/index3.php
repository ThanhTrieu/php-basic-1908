<?php
// bieu thuc chinh quy trong php
// cu phap
$inputString = "dang hoc php"; // co tu php nam trong chuoi ko?
// xay dung 1 bieu thuc chinh kiem tra dieu kien do
$btcq = "/[Aa-zZ]/"; // // chinh la cu phap cua bieu thuc chinh quy - tat ca nhung gi nam ben trong no deu la cac cu phap khac cua bieu thuc chinh quy
// lam the nao de biet bieu chinh quy co so khop - hay dien dat dung yeu cau ko?

if(preg_match($btcq, $inputString)){
	echo "yes";
} else {
	echo "No";
}

$number = "abc212";
$btcq2 = "/^[Aa-zZ]{3,}./";

echo "<br>";
if(preg_match($btcq2, $number)){
	echo "OK";
} else {
	echo "ERR";
}
echo "<br>";

// kiem tra 1 so co phai la 5 chu va chia cho 5 ko?
$chkNumber = '/^[1-9][0-9]{3}[0,5]$/';
$number = '12345';
if(preg_match($chkNumber, $number)){
	echo "Dung";
} else {
	echo "Sai";
}
$chkNumber2 = '/^[1,3,5,7,9][^1,3,5,7,9][0-9][0,5]$|^[1,3,5,7,9][^1,3,5,7,9][0,5]$/';
$tring = "Sap dc ve roi. Tao doi qua";
$chk = "/\./";
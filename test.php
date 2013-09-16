
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Love</title>
    <style type="text/css">
.result {
		text-align: center;
		font-size: 14pt;
		margin-top: 20%;
	}
  </style>
</head>

<body>
<p class=result>
<?php

$a=$_POST['First'];
$b=$_POST['Second'];

print "$a + $b";
function calc($a,$b)
{   
	
	mb_internal_encoding("UTF-8");
	$first = mb_strtoupper($a);
	$firstlength = mb_strlen($a);

		$second = mb_strtoupper($b);
	$secondlength = mb_strlen($b); 

	$LoveCount = 0;
	
	for ($i=0; $i < $firstlength; $i++) { 
	 	$sym =mb_substr($first, $i, 1);
	 	if ($sym =='А') $LoveCount+=5;
	 	if ($sym =='Б') $LoveCount+=5;
	 	if ($sym =='И') $LoveCount+=5;
	 	if ($sym =='Й') $LoveCount+=5;
	 	if ($sym =='С') $LoveCount+=5;
	 	if ($sym =='Т') $LoveCount+=5;
	 	if ($sym =='Ы') $LoveCount+=5;
	 	if ($sym =='Н') $LoveCount+=5;
	 	if ($sym =='Е') $LoveCount+=5;
	 	if ($sym =='Ц') $LoveCount+=5;
	 	if ($sym =='Я') $LoveCount+=5;
        if ($sym =='A') $LoveCount+=5;
        if ($sym =='B') $LoveCount+=5;
        if ($sym =='J') $LoveCount+=5;
        if ($sym =='K') $LoveCount+=5;
        if ($sym =='S') $LoveCount+=5;
        if ($sym =='T') $LoveCount+=5;
        if ($sym =='F') $LoveCount+=5;
        if ($sym =='O') $LoveCount+=5;
        if ($sym =='X') $LoveCount+=5;
	 } 
	 //second for()
	 for ($i=0; $i < $secondlength; $i++) { 
	 	$sym =mb_substr($second, $i, 1);
	 	
	 	if ($sym =='А') $LoveCount+=5;
	 	if ($sym =='Б') $LoveCount+=5;
	 	if ($sym =='И') $LoveCount+=5;
	 	if ($sym =='Й') $LoveCount+=5;
	 	if ($sym =='С') $LoveCount+=5;
	 	if ($sym =='Т') $LoveCount+=5;
	 	if ($sym =='Ы') $LoveCount+=5;
	 	if ($sym =='Н') $LoveCount+=5;
	 	if ($sym =='Е') $LoveCount+=5;
	 	if ($sym =='Ц') $LoveCount+=5;
	 	if ($sym =='Я') $LoveCount+=5;
        if ($sym =='A') $LoveCount+=5;
        if ($sym =='B') $LoveCount+=5;
        if ($sym =='J') $LoveCount+=5;
        if ($sym =='K') $LoveCount+=5;
        if ($sym =='S') $LoveCount+=5;
        if ($sym =='T') $LoveCount+=5;
        if ($sym =='F') $LoveCount+=5;
        if ($sym =='O') $LoveCount+=5;
        if ($sym =='X') $LoveCount+=5;
	 } 

$amount=0;
//считаем
if ($LoveCount>0) $amount=  10-(($firstlength+$secondlength)/2);
if ($LoveCount>2) $amount= 15-(($firstlength+$secondlength)/2);
if ($LoveCount>4) $amount= 20-(($firstlength+$secondlength)/2);
if ($LoveCount>6) $amount= 30-(($firstlength+$secondlength)/2);
if ($LoveCount>8) $amount=  40-(($firstlength+$secondlength)/2);
if ($LoveCount>10) $amount=  50-(($firstlength+$secondlength)/2);
if ($LoveCount>12) $amount= 55-(($firstlength+$secondlength)/2);
if ($LoveCount>14) $amount=  60-(($firstlength+$secondlength)/2);
if ($LoveCount>16) $amount= 65-(($firstlength+$secondlength)/2);
if ($LoveCount>18) $amount= 70-(($firstlength+$secondlength)/2);
if ($LoveCount>20) $amount= 75-(($firstlength+$secondlength)/2);
if ($LoveCount>22) $amount= 80-(($firstlength+$secondlength)/2);
if ($LoveCount>30) $amount= 85-(($firstlength+$secondlength)/2);
if ($LoveCount>40) $amount= 90-(($firstlength+$secondlength)/2);
if ($LoveCount>50) $amount= 95-(($firstlength+$secondlength)/2);
if ($LoveCount>60) $amount= 100-(($firstlength+$secondlength)/2);
if ($LoveCount>70) $amount= 105-(($firstlength+$secondlength)/2);
if ($LoveCount>80) $amount= 110-(($firstlength+$secondlength)/2);

if ($firstlength==0 || $secondlength==0) $amount= "Err";
if ($amount < 0) $amount= 0;
if ($amount >100) $amount=100;

print " = $amount%";
print ("<br> <br><br><br><a href='index.php' style='text-decoration:none;color:green;'>ЕЩЕ раз</a>");
}

calc($a,$b);

?>
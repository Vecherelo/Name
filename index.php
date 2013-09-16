<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>Hello!</title>
  <style type="text/css">
.hd {
		text-align: center;
	}
  </style>

</head>

<body>
<?php

echo("<p class=hd > Добро пожаловать! <br>
	Здесь Вы можете проверить совметимость имен и буковок!<br>
	ver 0.1 beta <br>" );

?>
<form name="Nam" action="test.php" method="POST">
     Введите Свое имя <input name="First" /> + Введите Второе имя <input name="Second" />
     <input type="submit" name="Send" value="Найти" />
</form>
</p>

</body>

</html>
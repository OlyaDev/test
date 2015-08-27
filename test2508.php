<?
	$s = date ("s");
	if ($s >= 0 && $s < 10 || $s >= 30 && $s < 40)
		$img='alien2';
	elseif ($s >= 10 && $s < 20 || $s >= 40 && $s < 50)
		$img ='alien';
	else 
		$img = 'walle';
?>

<html>
	<head>
		<title> Вас похищали инопланетяне? </title>
		<meta charset="utf-8">
	</head>
	<body style="background: url(img/<?php echo $img; ?>.jpg) ; background-size: cover;">
	
	<h1 style="color:#BEBEBE">Вас похищали инопланетяне? Сообщите нам об этом!</h1>



	

<form action="report.php" method="post">
<label for="firstname" style="color:#BEBEBE">  Имя: </label> 
<input type="text" id="firstname" name="firstname" /><br />
<label for="lastname" style="color:#BEBEBE"> Фамилия: </label> 
<input type="text"id="lastname" name="lastname" /><br /> 
<label for="email" style="color:#BEBEBE"> Ваш адрес электронной почты: </label>
<input type="text" id="email" name="email" /><br /> 
<label for="howmany" style="color:#BEBEBE"> Сколько их было? </label> 
<input type="text" id="howmany" name="howmany" /><br />
<label for="aliendescription" style="color:#BEBEBE"> Опишите их: </label> 
<input type="text" id="aliendescription" name="aliendescription" /><br />
<label for="fangspotted" style="color:#BEBEBE"> Видели ли вы мою собаку? </label>
<text style="color:#BEBEBE"> Да <input id="fangspotted" name="fangspotted" type="radio" value="yes"/>
<text style="color:#BEBEBE"> Нет <input id="fangspotted" name="fangspotted" type="radio" value="no"/><br />

<input type="submit" style="color:#BEBEBE" value="Сообщить" name="submit" /> 
<input type="submit" style="color:#BEBEBE" value="Сообщить" name="submit" /> 

</form>
				
	</body>	
</html>





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
<title> Космические пришельцы похищали меня! - Сообщение о похищении </title>
</head>

<body style="background: url(img/<?php echo $img; ?>.jpg) ; background-size: cover;">
<h2> Космические пришельцы похищали меня - Сообщение о похищении </h2>
<?php 
//$when_it_happened = $POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST ['aliendescription'];
$fang_spotted = $_POST ['fangspotted'];
$email = $_POST['email'];

echo 'Спасибо за заполнение формы. <br />';
//echo 'Вы были похищены ' . $when_it_happened . ' <br />'; 
//echo '.. и отсутствовали в течение ' . $how_long . '<br />';
echo 'Опишите их:'. $alien_description . '<br />'; 
echo 'Видели ли вы мою собаку?' .$fang_spotted . '<br />'; 
echo 'Ваш адрес электронной почты:' . $email . '<br />'; 

echo $when_it_happened;
?>
</body>
</html>
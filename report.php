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
<title> ����������� ��������� �������� ����! - ��������� � ��������� </title>
</head>

<body style="background: url(img/<?php echo $img; ?>.jpg) ; background-size: cover;">
<h2> ����������� ��������� �������� ���� - ��������� � ��������� </h2>
<?php 
//$when_it_happened = $POST['whenithappened'];
$how_long = $_POST['howlong'];
$alien_description = $_POST ['aliendescription'];
$fang_spotted = $_POST ['fangspotted'];
$email = $_POST['email'];

echo '������� �� ���������� �����. <br />';
//echo '�� ���� �������� ' . $when_it_happened . ' <br />'; 
//echo '.. � ������������� � ������� ' . $how_long . '<br />';
echo '������� ��:'. $alien_description . '<br />'; 
echo '������ �� �� ��� ������?' .$fang_spotted . '<br />'; 
echo '��� ����� ����������� �����:' . $email . '<br />'; 

echo $when_it_happened;
?>
</body>
</html>
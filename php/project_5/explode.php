<h2>Orduya Destek Fondu</h2>


<?php

if(!isset($_POST['d1']) && !isset($_POST['d2']) && !isset($_POST['d3']) or 
	isset($_POST['d1']) && empty($_POST['ad']) or
	isset($_POST['d1']) && empty($_POST['soyad']))
{
	echo'
	<form method="post">
		Adiniz:<br>
		<input type="text" name="ad"><br>
		Soyadiniz:<br>
		<input type="text" name="soyad"><br><br>
		<input type="submit" name="d1" value="Ireli">
	</form>';
}

if(isset($_POST['d1']) && !empty($_POST['ad']) && !empty($_POST['soyad']) or 
   isset($_POST['d2']) && empty($_POST['v']) or
   isset($_POST['d2']) && empty($_POST['m']))
{	
	echo'
	<form method="post">
		Vezife:<br>
		<input type="text" name="v"><br>
		Maash:<br>
		<input type="text" name="m"><br><br>		
		<input type="hidden" name="ad" value="'.$_POST['ad'].'">	
		<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		<input type="submit" name="d2" value="Ireli">
	</form>';
}


if(isset($_POST['d2']) && !empty($_POST['v']) && !empty($_POST['m']) or 
   isset($_POST['d3']) && empty($_POST['bank']) or
   isset($_POST['d3']) && empty($_POST['mebleg']))
{	
	echo'
	<form method="post">
		Bank hesabiniz:<br>
		<input type="text" name="bank"><br>
		Mebleg:<br>
		<input type="text" name="mebleg"><br><br>
		<input type="hidden" name="ad" value="'.$_POST['ad'].'">	
		<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
		<input type="hidden" name="m" value="'.$_POST['m'].'">
		<input type="submit" name="d3" value="Ireli">
	</form>';
}

if(isset($_POST['d3']) && !empty($_POST['bank']) && !empty($_POST['mebleg']))
{
	if($_POST['mebleg']<$_POST['m'] && $_POST['mebleg']>=10)
	{echo'Teshekkur edirik <b>'.$_POST['ad'].' '.$_POST['soyad'].'</b>, sizin <b>'.$_POST['mebleg'].'</b> azn desteyiniz qebul edildi';}
	elseif($_POST['m']<=$_POST['mebleg'])
	{echo'Daxil olunan mebleg maashdan yuksek oldugundan destek qebul olunmadi';}
	elseif($_POST['mebleg']<10)
	{echo '10dan asagi meblegler qebul olunmur';}
}
	

?>

<h1>Ad bazasi</h1>

<?php


if(isset($_POST['d'])){

	//şert ödenmediyinde yazılanlar
	$baza = explode(',',$_POST['evvelkiler']);

	if(count($baza)>0)
	{
		$say =count($baza) - 1;
		$n=0;

		for($i=0; $i<$say; $i++){

			if($baza[$i]==$_POST['ad'])
			{$error = 'Bu ad artiq movcuddur<br>';}
			else if(count($baza)>5)
			{$error = 'Ad sayi 5den artiq olmamalidir';}
		}
	}
	//*****************************

	//şert ödendiyinde $adları emele getirme
	if(!isset($error))
	{$adlar = $_POST['ad'].','.$_POST['evvelkiler'];}
	//*****************************

	//şert ödenmediyinde $adların forması
	else
	{$adlar = $_POST['evvelkiler'];}
	//********************************

		
}

echo $error;
//form method post emele getirme***
?>

<br>
<form method="post">
		Ad daxil edin:<br>
		<input type="text" name="ad"><br><br>
		<input type="hidden" name="evvelkiler" value="<?=$adlar ?>">
		<input type="submit" name="d" value="Daxil et">
</form>

<?php
//********************************

if(count($baza)>0)
{
	//şert ödendiyinde yazılması lazım olanlar
	$baza = explode(',',$adlar);

	$say =count($baza) - 1;
	$n=0;

	for($i=0; $i<$say; $i++){
		$n++;
		echo $n.'. '.$baza[$i].'<br>';
	}
	//****************************************
}


?>

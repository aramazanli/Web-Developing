<?php

$con = mysqli_connect('localhost','ahmed','12345','ilk_baza');

$tarix = date('Y-m-d H:i:s');

echo'<h1>Dost v1.0</h1>';

echo'<a href="insert.php">Yeni dost</a><br>
<a href="select.php">Dost siyahisi</a>';

echo'<h3>Yeni dost elave et</h3>';



if(isset($_POST['d'])){

	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']); $ad = htmlspecialchars($ad);}
	if(empty($_POST['soyad'])){unset($_POST['soyad']);} else{$soyad=trim($_POST['soyad']); $soyad = htmlspecialchars($soyad);}
	if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel=trim($_POST['tel']); $tel = htmlspecialchars($tel);}
	if(empty($_POST['qeyd'])){unset($_POST['qeyd']);} else{$qeyd=trim($_POST['qeyd']); $qeyd = htmlspecialchars($qeyd);}

	if(isset($ad) && isset($soyad) && isset($tel) && isset($qeyd)){




		  	$yoxla = mysqli_query($con,"SELECT tel FROM dost WHERE tel='".mysqli_real_escape_string($con,$tel)."'");

		  	if(mysqli_num_rows($yoxla)==0)
			{
				$daxilet = mysqli_query($con,"INSERT INTO dost(ad,soyad,tel,qeyd,tarix) 
				VALUES('".mysqli_real_escape_string($con,$ad)."',
					   '".mysqli_real_escape_string($con,$soyad)."',
				       '".mysqli_real_escape_string($con,$tel)."',
				       '".mysqli_real_escape_string($con,$tarix)."',
				       '".$tarix."')");

				if($daxilet==true)
				{echo'Dost ugurla bazaya elave edildi<br>';}
				else
				{echo'Dostu bazaya elave etmek mumkun olmadi<br>';}
			}
			else
			{echo'Dost artiq bazada movcuddur<br>';}
		
	}
	else
	{echo'Melumatlari tam daxil edin';}
		
}




$sec = mysqli_query($con,"SELECT ad,soyad,tel,qeyd,tarix FROM dost ORDER BY id DESC");
$say = mysqli_num_rows($sec);

echo'Sizin <b>'.$say.'</b> dostunuz var<br><br>';

?>



<br>
<form method="post">
	Dostun adi:<br>
	<input type="text" name="ad"><br>
	Dostun soyadi:<br>
	<input type="text" name="soyad"><br>
	Telefon:<br>
	<input type="text" name="tel"><br>
	Qeyd:<br>
	<textarea cols="22" rows="5" name="qeyd"></textarea><br><br>
	<input type="submit" name="d" value="Daxil et">
</form>

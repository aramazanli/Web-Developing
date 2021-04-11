<?php

$con = mysqli_connect('localhost','ahmed','12345','ilk_baza');

$tarix = date('Y-m-d H:i:s');

echo'<h1>Dost v1.0</h1>';

echo'<a href="insert.php">Yeni dost</a><br>
<a href="select.php">Dost siyahisi</a>';

echo'<h3>Dost siyahisi</h3>';

?>

<form method="post">
	<input type="text" name="sorgu" placeholder="Axtar">
	<input type="submit" name="axtar" value="Axtar">
	<input type="submit" name="all" value="Hamisi">
</form>


<?php

if(isset($_POST['edit']))
{
	$sec = mysqli_query($con,"SELECT * FROM dost WHERE id='".$_POST['id']."'");
	$info = mysqli_fetch_array($sec);


	echo'
	<form method="post">
		Dostun adi:<br>
		<input type="text" name="ad" value="'.$info['ad'].'"><br>
		Dostun soyadi:<br>
		<input type="text" name="soyad" value="'.$info['soyad'].'"><br>
		Telefon:<br>
		<input type="text" name="tel" value="'.$info['tel'].'"><br>
		Qeyd:<br>
		<textarea cols="22" rows="5" name="qeyd">'.$info['qeyd'].'</textarea><br><br>
		<input type="hidden" name="id" value="'.$info['id'].'">
		<input type="submit" name="update" value="Yenile">
	</form>
	';
}


if(isset($_POST['update']))
{
	if(empty($_POST['ad'])){unset($_POST['ad']);} else{$ad=trim($_POST['ad']); $ad = htmlspecialchars($ad);}
	if(empty($_POST['soyad'])){unset($_POST['soyad']);} else{$soyad=trim($_POST['soyad']); $soyad = htmlspecialchars($soyad);}
	if(empty($_POST['tel'])){unset($_POST['tel']);} else{$tel=trim($_POST['tel']); $tel = htmlspecialchars($tel);}
	if(empty($_POST['qeyd'])){unset($_POST['qeyd']);} else{$qeyd=trim($_POST['qeyd']); $qeyd = htmlspecialchars($qeyd);}

	if(isset($ad) && isset($soyad) && isset($tel) && isset($qeyd)){

		  $yoxla = mysqli_query($con,"SELECT tel FROM dost WHERE tel='".mysqli_real_escape_string($con,$tel)."' AND id!='".$_POST['id']."'");

		  	if(mysqli_num_rows($yoxla)==0)
			{
				$yenile = mysqli_query($con,"UPDATE dost SET
						ad='".mysqli_real_escape_string($con,$ad)."',
					   	soyad='".mysqli_real_escape_string($con,$soyad)."',
				       	tel='".mysqli_real_escape_string($con,$tel)."',
				       	qeyd='".mysqli_real_escape_string($con,$qeyd)."'
				       	WHERE id='".$_POST['id']."'");

				if($yenile==true)
				{echo'Dost ugurla yenilendi<br><br>';}
				else
				{echo'Dostu yenilemek mumkun olmadi<br><br>';}
			}
			else
			{echo'Dost artiq bazada movcuddur<br><br>';}

	}
	else
	{echo'Melumatlari tam daxil edin<br><br>';}
}



if(isset($_POST['sil']))
{
	echo'
	Siz <b>'.$_POST['ad'].' '.$_POST['soyad'].'</b> dostunuzu silmeye eminsinizmi?<br><br>
	<form method="post">
		<input type="hidden" name="id" value="'.$_POST['id'].'">
		<input type="submit" name="he" value="He">
		<input type="submit" name="yox" value="Yox">
	</form>';
}


if(isset($_POST['he']))
{
	$sil = mysqli_query($con,"DELETE FROM dost WHERE id='".$_POST['id']."'");

	if($sil==true)
	{echo'Dost ugurla silindi<br><br>';}
	else
	{echo'Dostu silmek mumkun olmadi<br><br>';}
}





if(isset($_POST['axtar']) && !empty($_POST['sorgu']))
{$axtar = " WHERE ad='".$_POST['sorgu']."' OR soyad='".$_POST['sorgu']."' OR tel='".$_POST['sorgu']. "'";}
else
{$axtar = "";}



//ORDER BY sutun_adi ASC -> A-da Z-ye/1-den 9-a
//ORDER BY sutun_adi DESC -> Z-den A-ya/9-dan 1-e


$sec = mysqli_query($con,"SELECT * FROM dost ".$axtar." ORDER BY id DESC");

$info = mysqli_fetch_array($sec);
$say = mysqli_num_rows($sec);

if($say==0)
	{echo'Axtardiginiz sorgu uzre melumat tapilmadi';}
else{
	echo'Sizin <b>'.$say.'</b> dostunuz var<br><br>';
	$i = 0;

	do
	{
		$i++;
		echo'#'.$i.'<br>';
		echo'<b>Dost: </b>'.$info['ad'].' '.$info['soyad'].'<br>';
		echo'<b>Telefon: </b>'.$info['tel'].'<br>';
		echo'<b>Tarix: </b>'.$info['tarix'].'<br>';
		echo'<form method="post">
		<input type="hidden" name="id" value="'.$info['id'].'">
		<input type="hidden" name="ad" value="'.$info['ad'].'">
		<input type="hidden" name="soyad" value="'.$info['soyad'].'">
		<input type="submit" name="sil" value="Sil">
		<input type="submit" name="edit" value="Redakte">
		</form><br>';
	}
	while($info = mysqli_fetch_array($sec));
}


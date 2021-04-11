<?php

$con = mysqli_connect('localhost','babash','12345','ikinci_baza');

$tarix = date('Y-m-d H:i:s');

echo'<h1>Champions_League v1.0</h1>';

echo'<a href="insertnew.php">Yeni klub</a><br>
<a href="selectnew.php">klub siyahisi</a>';

echo'<h3>klub siyahisi</h3>';

?>

<form method="post">
	<input type="text" name="sorgu" placeholder="Axtar">
	<input type="submit" name="axtar" value="Axtar">
	<input type="submit" name="all" value="Hamisi">
</form>


<?php

if(isset($_POST['sil']))
{
	echo'
	Siz <b>'.$_POST['klub'].' </b> klubunu silmeye eminsinizmi?<br><br>
	<form method="post">
		<input type="hidden" name="id" value="'.$_POST['id'].'">
		<input type="submit" name="he" value="He">
		<input type="submit" name="yox" value="Yox">
	</form>';
}


if(isset($_POST['he']))
{
	$sil = mysqli_query($con,"DELETE FROM champions_league WHERE id='".$_POST['id']."'");

	if($sil==true)
	{echo'klub ugurla silindi<br><br>';}
	else
	{echo'Klubu silmek mumkun olmadi<br><br>';}
}





if(isset($_POST['axtar']) && !empty($_POST['sorgu']))
{$axtar = " WHERE klub='".$_POST['sorgu']."' OR reyting_bali='".$_POST['sorgu']."' OR qeyd='".$_POST['sorgu']. "'";}
else
{$axtar = "";}



//ORDER BY sutun_adi ASC -> A-da Z-ye/1-den 9-a
//ORDER BY sutun_adi DESC -> Z-den A-ya/9-dan 1-e


$sec = mysqli_query($con,"SELECT * FROM champions_league ".$axtar." ORDER BY id DESC");

$info = mysqli_fetch_array($sec);
$say = mysqli_num_rows($sec);

if($say==0)
	{echo'Axtardiginiz sorgu uzre melumat tapilmadi';}
else{
	echo'Cedvelde <b>'.$say.'</b> klub var<br><br>';
	$i = 0;

	do
	{
		$i++;
		echo'#'.$i.'<br>';
		echo'<b>Klub: </b>'.$info['klub'].' <br>';
		echo'<b>Klub: </b>'.$info['reyting_bali'].' <br>';
		echo'<b>Qeyd: </b>'.$info['qeyd'].'<br>';
		echo'<b>Tarix: </b>'.$info['tarix'].'<br>';
		echo'<form method="post">
		<input type="hidden" name="id" value="'.$info['id'].'">
		<input type="hidden" name="klub" value="'.$info['klub'].'">
		<input type="submit" name="sil" value="Sil">
		</form><br>';
	}
	while($info = mysqli_fetch_array($sec));
}

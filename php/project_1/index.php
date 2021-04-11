<?php

$con = mysqli_connect('localhost','babash','12345','ikinci_baza');

$tarix = date('Y-m-d H:i:s');

echo'<h1>Champions_League v1.0</h1>';

echo'<a href="insertnew.php">Yeni klub</a><br>
<a href="selectnew.php">klub siyahisi</a>';

echo'<h3>Yeni klub elave et</h3>';



if(isset($_POST['d'])){

	if(!empty($_POST['klub']) && !empty($_POST['reyting_bali'])  && !empty($_POST['qeyd'])){


		  	$yoxla = mysqli_query($con,"SELECT klub FROM champions_league WHERE klub='".$_POST['klub']."'");

		  	if(mysqli_num_rows($yoxla)==0)
			{
				$daxilet = mysqli_query($con,"INSERT INTO champions_league(klub,reyting_bali,qeyd,tarix) 
				VALUES('".$_POST['klub']."','".$_POST['reyting_bali']."','".$_POST['qeyd']."','".$tarix."')");

				if($daxilet==true)
				{echo'klub ugurla bazaya elave edildi<br>';}
				else
				{echo'klubu bazaya elave etmek mumkun olmadi<br>';}
			}
			{echo'klub artiq bazada movcuddur<br>';}
		
	}
	else
	{echo'Melumatlari tam daxil edin';}
		
}




$sec = mysqli_query($con,"SELECT klub,reyting_bali,qeyd,tarix FROM champions_league ORDER BY id DESC");
$say = mysqli_num_rows($sec);

echo'Cedvelde <b>'.$say.'</b> klub var<br><br>';

?>



<br>
<form method="post">
	Klubun adi:<br>
	<input type="text" name="klub"><br>
	Klubun reyting bali:<br>
	<input type="text" name="reyting_bali"><br>
	Qeyd:<br>
	<textarea cols="22" rows="5" name="qeyd"></textarea><br><br>
	<input type="submit" name="d" value="Daxil et">
</form>

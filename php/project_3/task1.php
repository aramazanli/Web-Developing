<?php




if($_POST['ad']==Ahmed && $_POST['soyad']==Ramazanli && $_POST['kod']==12345)
{$tamam = 1;}

if($_POST['ad']==Fuad && $_POST['soyad']==Aliyev && $_POST['kod']==67890)
{$tamam = 1;}





if(!isset($tamam)){
	
	echo'
	<form method="post">
		Adiniz:<br>
		<input type="text" name="ad"><br>
		Soyadiniz:<br>
		<input type="text" name="soyad"><br>
		Kod:<br>
		<input type="text" name="kod"><br><br>
		<input type="submit" name="d" value="Imtahana bashla">
	</form>';
}



if(isset($tamam) && isset($_POST['d'])){

		echo'
		<form method="post">

			<b>1. En bahali mashini qeyd edin:</b><br>
			<input type="radio" name="s1" value="a"> A) Lada<br>
			<input type="radio" name="s1" value="b"> B) Toyota<br>
			<input type="radio" name="s1" value="c"> C) Ferrari<br>
			<input type="radio" name="s1" value="d"> D) Mercedes<br>
			<input type="radio" name="s1" value="e"> E) Reno<br><br>

			<input type="hidden" name="ad" value="'.$_POST['ad'].'">
			<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
			<input type="hidden" name="kod" value="'.$_POST['kod'].'">
			<input type="submit" name="d1" value="Ireli">

		</form>';
		
}
	if(isset($tamam) && isset($_POST['d1'])){

		echo'
		<form method="post">

			<b>2. En ucuz mashini qeyd edin:</b><br>
			<input type="radio" name="s2" value="a"> A) Lada<br>
			<input type="radio" name="s2" value="b"> B) Toyota<br>
			<input type="radio" name="s2" value="c"> C) Ferrari<br>
			<input type="radio" name="s2" value="d"> D) Mercedes<br>
			<input type="radio" name="s2" value="e"> E) Reno<br><br>

			<input type="hidden" name="s1" value="'.$_POST['s1'].'">
			<input type="hidden" name="ad" value="'.$_POST['ad'].'">
			<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
			<input type="hidden" name="kod" value="'.$_POST['kod'].'">
			<input type="submit" name="d2" value="Ireli">

		</form>';
		
	}

	if(isset($tamam) && isset($_POST['d2'])){
		echo'
		<form method="post">

			<b>3. Hansi mashin Yaponiya istehsalidir?</b><br>
			<input type="radio" name="s3" value="a"> A) Lada<br>
			<input type="radio" name="s3" value="b"> B) Toyota<br>
			<input type="radio" name="s3" value="c"> C) Ferrari<br>
			<input type="radio" name="s3" value="d"> D) Mercedes<br>
			<input type="radio" name="s3" value="e"> E) Reno<br><br>

			<input type="hidden" name="s2" value="'.$_POST['s2'].'">
			<input type="hidden" name="s1" value="'.$_POST['s1'].'">
			<input type="hidden" name="ad" value="'.$_POST['ad'].'">
			<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
			<input type="hidden" name="kod" value="'.$_POST['kod'].'">
			<input type="submit" name="d3" value="Ireli">

		</form>';
		
	}
	if(isset($tamam) && isset($_POST['d3'])){
		echo'
		<form method="post">

				<b>4. Hansi mashin Almaniya istehsalidir?</b><br>
				<input type="radio" name="s4" value="a"> A) Lada<br>
				<input type="radio" name="s4" value="b"> B) Toyota<br>
				<input type="radio" name="s4" value="c"> C) Ferrari<br>
				<input type="radio" name="s4" value="d"> D) Mercedes<br>
				<input type="radio" name="s4" value="e"> E) Reno<br><br>

				<input type="hidden" name="s3" value="'.$_POST['s3'].'">
				<input type="hidden" name="s2" value="'.$_POST['s2'].'">
				<input type="hidden" name="s1" value="'.$_POST['s1'].'">
				<input type="hidden" name="ad" value="'.$_POST['ad'].'">
				<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
				<input type="hidden" name="kod" value="'.$_POST['kod'].'">
				<input type="submit" name="d4" value="Ireli">

		</form>';
		
	}
	if(isset($tamam) && isset($_POST['d4'])){
		echo'
		<form method="post">

			<b>5. Hansi mashin Rusiya istehsalidir?</b><br>
			<input type="radio" name="s5" value="a"> A) Lada<br>
			<input type="radio" name="s5" value="b"> B) Toyota<br>
			<input type="radio" name="s5" value="c"> C) Ferrari<br>
			<input type="radio" name="s5" value="d"> D) Mercedes<br>
			<input type="radio" name="s5" value="e"> E) Reno<br><br>

			<input type="hidden" name="s4" value="'.$_POST['s4'].'">
			<input type="hidden" name="s3" value="'.$_POST['s3'].'">
			<input type="hidden" name="s2" value="'.$_POST['s2'].'">
			<input type="hidden" name="s1" value="'.$_POST['s1'].'">
			<input type="hidden" name="ad" value="'.$_POST['ad'].'">
			<input type="hidden" name="soyad" value="'.$_POST['soyad'].'">
			<input type="hidden" name="kod" value="'.$_POST['kod'].'">
			<input type="submit" name="d5" value="Imtahani bitir">

		</form>';
		
	}
	if(isset($tamam) && isset($_POST['d5'])){


		if($_POST['s1']=='c')
			{$bal++; $s1='1. + ';}
		elseif(empty($_POST['s1']))
			{$s1='1. ';}
		else
			{$s1='1. - ';}

		if($_POST['s2']=='a')
			{$bal++; $s2='2. + ';}
		elseif(empty($_POST['s2']))
			{$s2='2. ';}
		else
			{$s2='2. - ';}


		if($_POST['s3']=='b')
			{$bal++; $s3='3. + ';}
		elseif(empty($_POST['s3']))
			{$s3='3. ';}
		else
			{$s3='3. - ';}

		if($_POST['s4']=='d')
			{$bal++; $s4='4. + ';}
		elseif(empty($_POST['s4']))
			{$s4='4. ';}
		else
			{$s4='4. - ';}

		if($_POST['s5']=='a')
			{$bal++; $s5='5. + ';}
		elseif(empty($_POST['s5']))
			{$s5='5. ';}
		else
			{$s5='5. - ';}

		echo'<h3>Netice: </h3>';
		echo 'Adiniz <b>' .$_POST['ad']. ' </b> <br>';
		echo 'Soyadiniz <b>' .$_POST['soyad']. '</b> <br>';
		echo 'Kod <b>' .$_POST['kod']. '</b> <br>';
		echo'Toplam bal: <b>'.$bal.'</b> <br>';
		echo'Cavablar: '.$s1.$s2.$s3.$s4.$s5;
		
	}



?>





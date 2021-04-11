

<h1>Imtahan v1.0</h1>


<?php

if(isset($_POST['d']))
{
	$bal = 0;

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

	echo'<h3>Netice: </h3>';
	echo'Toplam bal: '.$bal.'<br>';
	echo'Cavablar: '.$s1.$s2.$s3;

}


?>
<br><br>
<form method="post">
	
	<b>1. En bahali mashini qeyd edin:</b><br>
	<input type="radio" name="s1" value="a"> A) Lada<br>
	<input type="radio" name="s1" value="b"> B) Toyota<br>
	<input type="radio" name="s1" value="c"> C) Ferrari<br>
	<input type="radio" name="s1" value="d"> D) Mercedes<br>
	<input type="radio" name="s1" value="e"> E) Reno<br><br>

	<b>2. En ucuz mashini qeyd edin:</b><br>
	<input type="radio" name="s2" value="a"> A) Lada<br>
	<input type="radio" name="s2" value="b"> B) Toyota<br>
	<input type="radio" name="s2" value="c"> C) Ferrari<br>
	<input type="radio" name="s2" value="d"> D) Mercedes<br>
	<input type="radio" name="s2" value="e"> E) Reno<br><br>


	<b>3. Hansi mashin Yaponiya istehsalidir?</b><br>
	<input type="radio" name="s3" value="a"> A) Lada<br>
	<input type="radio" name="s3" value="b"> B) Toyota<br>
	<input type="radio" name="s3" value="c"> C) Ferrari<br>
	<input type="radio" name="s3" value="d"> D) Mercedes<br>
	<input type="radio" name="s3" value="e"> E) Reno<br><br>

	<input type="submit" name="d" value="Imtahani bitir">

</form>

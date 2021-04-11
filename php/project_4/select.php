<?php


echo'Sizin cinsiniz: '.$_POST['cins'];
if($_POST['cins']==kishi){
	echo' kishidi bu!';
}


?>

<br><br>
<form method="post">
	Cinsiniz:<br>
	<input type="radio" name="cins" value="kishi"> Kishi
	<input type="radio" name="cins" value="qadin"> Qadin <br>
	<input type="submit" name="d" value="Ok">
</form>

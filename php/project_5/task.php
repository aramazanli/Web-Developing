<?php

echo'Daxil etdiyiniz ad: '.$_POST['x'].'<br>';
echo'Daxil etdiyiniz soyad: '.$_POST['y'].'<br>';

?>




<br>
<form method="post">
	Adiniz:<br>
	<input type="text" name="x"><br>
	Soyadiniz:<br>
	<input type="text" name="y"><br><br>
	<input type="submit" value="Gonder">
</form>

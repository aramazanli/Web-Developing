<?php

$tarix = date('Y-m-d H:i:s');

if (isset($_POST['d'])) {
	if(!empty($_POST['ad']) && !empty($_POST['soyad']) && !empty($_POST['mesaj']))
	{$mesajlar = $_POST['evvelkiler'].'<b>'.$_POST['ad'].' '.$_POST['soyad'].'</b><br>'.$_POST['mesaj'].'<br>'.$tarix.'<br><br>';}

	else
	{$mesajlar = $_POST['evvelkiler'];}
	
}


?>

<form method="post">
	Adiniz:<br>
	<input type="text" name="ad"><br>
	Soyadiniz:<br>
	<input type="text" name="soyad"><br>
	Mesajiniz:<br>
	<textarea cols="21" rows="5" name="mesaj"></textarea><br><br>
	<input type="hidden" name="evvelkiler" value="<?=$mesajlar ?>">
	<input type="submit" name="d" value="Gonder">
</form>
<?= $mesajlar?>

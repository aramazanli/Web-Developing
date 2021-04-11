
<h2>Ne qeder muddetdir ki movcudam</h2>

<form method="post">
Dogum tarixiniz:<br>

	<select name="il">
		<option value="">il</option>
		<?php

		$i = 1950;

		do
		{
			$i++;
			echo'<option value="'.$i.'">'.$i.'</option>';
		}
		while($i<2021)

		?>
	</select>

	<select name="ay">
		<option value="">ay</option>
		<?php

		$i = 0;

		do
		{
			$i++;
			echo'<option value="'.$i.'">'.$i.'</option>';
		}
		while($i<12)

		?>
	</select>

	<select name="gun">
		<option value="">gun</option>
		<?php

		$i = 0;

		do
		{
			$i++;
			echo'<option value="'.$i.'">'.$i.'</option>';
		}
		while($i<31)

		?>
	</select>


	<br><br>
	<input type="submit" name="d" value="Hesabla">
</form>
<?php
$x = time();
$y = strtotime($_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'].'00:00:00');

$san = $x - $y;
$deq = round($san/60);
$saat = round($san/3600);
$gun = round($san/(3600*24));


$m = date('m');
$d = date('d');

if($_POST['ay']>=$m && $_POST['gun']>$d)
{$yas = 2021 - $_POST['il']-1;}
else
{$yas = 2021 - $_POST['il'];}


echo'Sizin dogum tarixiniz:<b> '.$_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'].'</b><br>';
echo'Sizin yashiniz:<b>'.$yas.  '</b><br>';
echo'Siz heyatda <b> '.$san. '</b> saniye,<b> '.$deq. '</b> deqiqe,<b> '.$saat. '</b> saat,<b> '.$gun. '</b> gundur ki movcudsunuz.<b>';
?>


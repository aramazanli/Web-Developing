<h2>Dogum gunume ne qede qalib?</h2>

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
$x = 2021;
$y =2022;
$z = strtotime(''.$x.'-'.$_POST['ay'].'-'.$_POST['gun'].'00:00:00');
$t = time();


if($_POST['ay']>3 && $_POST['gun']>2)
{$yas = 2021 - $_POST['il']-1;
$z = strtotime(''.$x.'-'.$_POST['ay'].'-'.$_POST['gun'].'00:00:00');}
else
{$yas = 2021 - $_POST['il'];
$z = strtotime(''.$y.'-'.$_POST['ay'].'-'.$_POST['gun'].'00:00:00');}
$yas_olacaq=$yas+1;
/*
echo ''.$z.'';
echo '    ';
echo ''.$t.'';*/
$san = $z-$t;
$deq = round($san/60);
$saat = round($san/3600);
$gun = round($san/(3600*24));

if(isset($_POST['d'])){
	echo'Sizin dogum tarixiniz:<b> '.$_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'].'</b><br>';
	echo'Sizin dogum gununuze <b> '.$san. '</b> saniye,<b> '.$deq. '</b> deqiqe,<b> '.$saat. '</b> saat,<b> '.$gun. '</b> gun qalib ve sizin.<b> '.$yas_olacaq. '</b> yashiniz olacaq';
}
?>



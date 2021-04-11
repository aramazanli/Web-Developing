<?php


echo'Sizin ixtisasiniz: '.$_POST['ixt'].'<br>';
echo'Sizin tevelludunuz: '.$_POST['il'].'-'.$_POST['ay'].'-'.$_POST['gun'].'<br>';
?>

<br><br>
<form method="post">
	Ixtisasiniz:<br>
	<select name="ixt">
		<option value="">Ixtisas secin</option>
		<option <?php if($_POST['ixt']=='muellim'){echo'selected';} ?> value="muellim">Muellim</option>
		<option <?php if($_POST['ixt']=='hekim'){echo'selected';} ?> value="hekim">Hekim</option>
		<option <?php if($_POST['ixt']=='muhendis'){echo'selected';} ?> value="muhendis">Muhendis</option>
		<option <?php if($_POST['ixt']=='vekil'){echo'selected';} ?> value="vekil">Vekil</option>
		<option <?php if($_POST['ixt']=='diger'){echo'selected';} ?> value="diger">Diger</option>
	</select><br>
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
	<input type="submit" name="d" value="Ok">
</form>

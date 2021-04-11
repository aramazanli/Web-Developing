<?php
$cavab=1;
if(isset($_POST['d1']))
{$cavab = $_POST['evvelki']+1;}
elseif(isset($_POST['d2']))
{$cavab = $_POST['evvelki']-1;}
echo $cavab;

?>



<br><br>
<form method="post">

	<input type="submit" name="d1" value="+">
	<input type="submit" name="d2" value="-">
	<input type="hidden" name="evvelki" value="<?=$cavab ?>">
</form>

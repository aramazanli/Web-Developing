<?php

//isset(deyishen) - movcuddursa/yaranibsa/basilibsa
//!isset(deyishen) - movcud deyilse/yaranmayibsa/basilmayibsa

//empty(deyishen) - boshdursa
//!empty(deyishen) - bosh deyilse

//if($_POST['t']=='')
if(isset($_POST['t']))
{$cavab = $_POST['e1'] + $_POST['e2'];}

if(isset($_POST['c']))
{$cavab = $_POST['e1'] - $_POST['e2'];}

if(isset($_POST['v']))
{$cavab = $_POST['e1'] * $_POST['e2'];}

if(isset($_POST['b']) && $_POST['e2']!=0)
{$cavab = $_POST['e1'] / $_POST['e2'];}

if(isset($_POST['b']) && !empty($_POST['e2']) && $_POST['e2']==0)
{$cavab = '0-a bolmek olmaz';}
?>



<form method="post">
	<input type="text" name="e1" size="5" autocomplete="off" placeholder="<?=$_POST['e1'] ?>">
	<input type="text" name="e2" size="5" autocomplete="off" placeholder="<?=$_POST['e2'] ?>">
	<input type="submit" <?php if(isset($_POST['t'])){echo'style="background:red"';} ?> name="t" value="+">
	<input type="submit" <?php if(isset($_POST['c'])){echo'style="background:red"';} ?> name="c" value="-">
	<input type="submit" <?php if(isset($_POST['v'])){echo'style="background:red"';} ?> name="v" value="*">
	<input type="submit" <?php if(isset($_POST['b'])){echo'style="background:red"';} ?> name="b" value="/">
	= <?=$cavab ?>
</form>

<?php

if(isset($_POST['duyme']))
{
if($_POST['x']=='Azer')
{echo $_POST['x'].' bibiogludur';}
elseif($_POST['x']=='Kamran')
{echo $_POST['x'].' emi ogludur';}
elseif($_POST['x']=='Revan')
{echo $_POST['x'].' yaxin dostdur';}
else
{echo $_POST['x'].'in kim oldugunu bilmirem';}


}

?>

<form method="post">
	Qohum adi daxil edin:<br>
	<input type="text" name="x"><br><br>
	<input type="submit" name = "duyme" value="Gonder">
</form>

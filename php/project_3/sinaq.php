
<h2>Virtual printer</h2>
<form method="post">
	Metn:<br>
	<input type="text" name="metn"><br>
	Say:<br>
	<input type="text" name="say"><br><br>
	<input type="submit" name="d" value="Cap et">
</form>

<?php

if(isset($_POST['d'])){
	if($_POST['say']<=25 && $_POST['say']>=1){
		$i=0;
		do
		{$i++; echo $i.'. '.$_POST['metn'].'<br>';}
		while($i<$_POST['say']);
	}
	elseif($_POST['say']>25)
		{echo '25den cox print etmek mumkun deyil';}
	else
		{echo 'Kecherli reqem daxil olunmadi';}
}

?>

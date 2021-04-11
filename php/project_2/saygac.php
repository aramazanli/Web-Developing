<?php

if(isset($_POST['d1']))
{

	$x = explode('+',$_POST['x']);
	if(count($x)>1){
		$cavab =$x[0];
		for($i=1; $i<count($x); $i++){
			$cavab = $cavab +$x[$i];
		}
	}
	
	$x = explode('-',$_POST['x']);
	if(count($x)>1){
		$cavab =$x[0];
		for($i=1; $i<count($x); $i++){
			$cavab = $cavab -$x[$i];
		}
	}

	$x = explode('*',$_POST['x']);
	if(count($x)>1){
		$cavab =$x[0];
		for($i=1; $i<count($x); $i++){
			$cavab = $cavab *$x[$i];
		}
	}

	$x = explode('/',$_POST['x']);
	if(count($x)>1){
		$cavab =$x[0];
		for($i=1; $i<count($x); $i++){
			if($x[$i]==0)
			{$cavab = '0a bolmek olmaz';$i=count($x);}
			else
			{$cavab = $cavab /$x[$i];}
			
		}
	}


}

?>


<form method="post">
	<textarea cols="24" rows="5" name="x"><?=$cavab ?></textarea><br>
	<input type="submit" name="d1" value="=">
	<input type="submit" name="d2" value="C">
</form>


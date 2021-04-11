<?php

$ad = 'Ramin, Tural, Fuad, Aysel, Gunay, Farid, Samir';
//echo $ad;

$x = explode(',',$ad);
//echo $x;
print_r($x);
echo'<br><br>';

echo $x[1];

echo'<br><br>';

$say = count($x);

echo'Bazada <b>'.$say.'</b> ad var';

echo'<br><br>';


$n = 0;

for($i=0; $i<count($x); $i++)
{
	$n++;
	echo $n.'. '.$x[$i].'<br>';
}

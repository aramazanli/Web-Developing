<?php

//time()
//1970-01-01 00:00:00 tarixinden indiki zamana qeder olan vaxti saniyelerle geri qaytarir
$x = time();
//echo $x;

//strtotime()
//1970-01-01 00:00:00 tarixinden qeyd edilmish zamana qeder olan vaxti saniyelerle geri qaytarir
$y = strtotime('2022-03-26 00:00:00');
//echo $y;

$san = $y - $x;
echo'Igidin dogum gunune <b>'.$san.'</b> saniye qalib<br>';

$deq = round($san/60);
//$deq = ceil($san/60);
//$deq = floor($san/60);
echo'Igidin dogum gunune <b>'.$deq.'</b> deqiqe qalib<br>';

$saat = round($deq/60);
echo'Igidin dogum gunune <b>'.$saat.'</b> saat qalib<br>';

$gun = round($saat/24);
echo'Igidin dogum gunune <b>'.$gun.'</b> gun qalib<br>';

?>

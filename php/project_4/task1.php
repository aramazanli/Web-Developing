<?php




echo'<h3>Do/While - 1-den 10-a qeder ededlerin ekrana verilmesi</h3>';

$i = 0;

do
{$i++; echo $i.' ';}
while($i<10);

echo'<h3>While - 1-den 10-a qeder ededlerin ekrana verilmesi</h3>';

$i = 0;

while($i<10)
{$i++; echo $i.' ';}

echo'<h3>For - 1-den 10-a qeder ededlerin ekrana verilmesi</h3>';

for($i=0; $i<10; $i++)
{echo $i.' ';}


echo'<h3>1-den 10-a qeder ededlerin ceminin ekrana verilmesi</h3>';

$i = 0;
$cem = 0;

do
{$i++; $cem = $cem + $i;}
while($i<10);

echo'1-den 10-a qeder ededlerin cemi: '.$cem;

echo'<h3>Vurma cedveli</h3>';

$i = 0;
$e = 5;

do
{$i++; $c = $e * $i; echo $e.'*'.$i.'='.$c.'<br>';}
while($i<10);



?>

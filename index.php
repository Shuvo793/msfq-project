<?php
function add($a,$b){
    $c=$a+$b;
    return $c;


}
$a1=add(10,10);
$a2=add(10,10);
$a3=add(10,10);
$a4=add(10,10);

$x=add($a1,$a2);
$y=add($a3,$a4);
$z=add($x,$y);

echo $z;



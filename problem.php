<?php

function MinStep ($x) {


$position = 5;
 $y = ceil(($x) / $position);

 return $y;

}

$test = MinStep(5);
echo $test;
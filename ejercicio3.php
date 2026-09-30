<?php
$n=0;
echo "Introduzca un número: \n";
fscanf(STDIN, "%d", $n);

// if($n<0){
//    $array = range($n, 0);
// }
// else{
//     $array = range(0, $n);
// }

$array = ($n<0) ? range($n, 0):range(0, $n);


print_r($array);
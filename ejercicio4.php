<?php
echo "Introduzca un número entre 1 y 10: \n";
fscanf(STDIN, "%d", $n);

$array = [];
for($i=0; $i<=10; $i++){
   //$array["$n"."x"."$i"] = $n*$i;

   $array["{$n}x{$i}"] = $n*$i;

}

// print_r($array);
// var_dump($array);
foreach ($array as $key => $value) {
   echo "$key => $value\n";
}

<?php 
$ibexSubset = [
    "Iberdrola"  =>  1.85,
"Inditex"    =>  1.42,
"Santander"  =>  0.97,
"BBVA"       =>  0.76,
"Repsol"     =>  0.51
];


foreach ($ibexSubset as $key => $value) {
   echo "<p>Empresa:  $key  -  Variación: $value</p>";
}

$varMedia= array_sum($ibexSubset)/count($ibexSubset);
echo "La variación media: $varMedia";
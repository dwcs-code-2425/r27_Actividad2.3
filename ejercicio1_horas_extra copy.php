<?php 
const HORA_EXTRA = 12.5;

$horasExtra= [2, 0, 3, 1, 0];
$numTotal=0;

//$numTotal= array_sum($horasExtra);

foreach ($horasExtra as  $value) {
    $numTotal +=$value;
}


$importeHorasExtra = $numTotal*HORA_EXTRA;

echo "<p>El nº total de horas extra es: $numTotal</p>";
echo "<p>El importe total correspondiente a esas horas es: $importeHorasExtra</p>";
<?php
/**
Tekstinio redaktoriaus pagalba sukurti failą su teleloto skaičiais (5 x 5). Parašyto PHP skriptą, kuris nuskaito failą ir išveda ekrane teleloto lentelę (5 x 5).
 */
$f = fopen('Failai/failas2.txt', r);
$s = fread($f, filesize('Failai/failas2.txt'));
fclose($f);
$m = json_decode($s);
echo '<table>';
foreach
// UZBAIK !!!!!!!!!!!!!
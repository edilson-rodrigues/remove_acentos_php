<?php
#exemplo

include_once 'removeAcentos.php';

$nome = 'JOÃO.';
$cidade = 'SÃO PAULO.';

echo 'com acentuação: ' . $nome . ' sem acentuação: ' . removeacentos($nome);
echo "</br>";
echo 'com acentuação: ' . $cidade . ' sem acentuação: ' . removeacentos($cidade);
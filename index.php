<?php
$nome = 130;
echo "$nome";
echo "<br>";
$nome = 'Pedro'; $idade =18; $endereco = 'Anjo da Guarda';
$curso = 'Bict';
echo "<br>";

echo "Ola eu sou $nome, tenho $idade anos, moro no $endereco, e faço $curso , na UFMA";
echo "<br>";

?>
<?php
echo "<br>";

$num1 = 2;
$num2 = 4;

echo $num2/$num1;
echo "<br>";

echo $num2*$num1;
echo "<br>";

echo $num2+$num1;
echo "<br>";

echo $num2-$num1;
?>

<?php 

$calabreso = 3;
$cnpjoto = 1;
echo "<br>";

if ($calabreso < $cnpjoto){
echo "O primeiro numero é menor que o segundo";
}

elseif($calabreso > $cnpjoto){
    echo "O primeiro numero é maior que o segundo";
}
else{
    echo "Os numeros são iguais";
}
?>

<?php 

$vogal = 'Calanguinho';

if (str_contains($vogal, "a") && (str_contains ($vogal, "o"))) {
    echo "Contem";
}

else{
    echo "Não contem";
}
echo "<br>"
?>

<?php 

function calculararea($lado) {
$area = $lado * $lado;
    echo "A area do quadrado de lado $lado é igual a $area";
    echo "<br>";
    return ($lado);
}
echo calculararea(5);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Atividade </title>
</head>
<body>
<!-- Nivel Agua -->
<?php
$nome = "Harry Potter";
$idade = 37;
$especie = "humano";
$vivo = true;
$altura = 1.78;
// Nivel danoninho com array indexado
$hobby = ["Jogar Quadribol", "Explorar Hogwarts", "Passar tempo com os amigos", "Lutar contra injustiças", "Voar em vassouras"];

echo "<h1> Nomes dos Bruxos de hogwarts</h1>";

echo "<h2> Nome: $nome</h2>";
echo "<h2> Idade: $idade</h2>";
echo "<h2> Especie: $especie</h2>";
echo "<h2>Vivo: " . ($vivo ? "Sim" : "Não") . "</h2>";
echo "<h2> Altura: $altura</h2>";

echo "<h2> hobby principal: $hobby[0]</h2>";


$nome2 = "Hermione Granger";
$idade2 = 37;
$especie2 = "Humana";
$vivo2 = true;
$altura2 = 1.71;
// Nivel danoninho com array indexado
$hobby2 = ["Ler livros", "Estudar/Aprender Feitiços", "defender causas casuais", "ajudar os outros","Planejar e Organizar"];

echo "<h2> Nome: $nome2</h2>";
echo "<h2> Idade: $idade2</h2>";
echo "<h2> Especie: $especie2</h2>";
echo "<h2>Vivo: " . ($vivo2 ? "Sim" : "Não") . "</h2>";
echo "<h2> Altura: $altura2</h2>";
echo "<h2> hobby principal: $hobby2[1]</h2>";

$nome3 = "Ron Weasley";
$idade3 = 37;
$especie3 = "Humano";
$vivo3 = true;
$altura3 = 1.85;
// Nivel danoninho com array indexado
$hobby3 = ["Jogar xadrez bruxo", "Quadribol", "Comer", "Passar tempo com os amigos", "Evitar Estudar"];

echo "<h2> Nome: $nome3</h2>";
echo "<h2> Idade: $idade3</h2>";
echo "<h2> Especie: $especie3</h2>";
echo "<h2>Vivo: " . ($vivo3 ? "Sim" : "Não") . "</h2>";
echo "<h2> Altura: $altura3</h2>";

echo "<h2> hobby principal: $hobby3[0]</h2>";



?>
    
</body>
</html>
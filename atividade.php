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

    echo "<p> Nome: $nome</p>";
    echo "<p> Idade: $idade</p>";
    echo "<p> Especie: $especie</p>";
    echo "<p>Vivo: " . ($vivo ? "Sim" : "Não") . "</p>";
    echo "<p> Altura: $altura</p>";

    echo "<p> hobby principal: $hobby[0]</p>";


    $nome2 = "Hermione Granger";
    $idade2 = 37;
    $especie2 = "Humana";
    $vivo2 = true;
    $altura2 = 1.71;
    // Nivel danoninho com array indexado
    $hobby2 = ["Ler livros", "Estudar/Aprender Feitiços", "defender causas casuais", "ajudar os outros", "Planejar e Organizar"];

    echo "<p> Nome: $nome2 </p>";
    echo "<p>Idade: $idade2 </p> ";
    echo "<p>Especie: $especie2 </p>";
    echo "<p>Vivo: " . ($vivo2 ? "Sim" : "Não") . " </p> ";
    echo "<p>Altura: $altura2 </p> ";
    echo "<p>hobby principal: $hobby2[1]</p>";

    $nome3 = "Ron Weasley";
    $idade3 = 37;
    $especie3 = "Humano";
    $vivo3 = true;
    $altura3 = 1.85;
    // Nivel danoninho com array indexado
    $hobby3 = ["Jogar xadrez bruxo", "Quadribol", "Comer", "Passar tempo com os amigos", "Evitar Estudar"];

    echo "<p> Nome: $nome3</p>";
    echo "<p> Idade: $idade3</p>";
    echo "<p> Especie: $especie3</p>";
    echo "<p>Vivo: " . ($vivo3 ? "Sim" : "Não") . "</p>";
    echo "<p> Altura: $altura3</p>";

    echo "<p> hobby principal: $hobby3[0]</p>";



    ?>

</body>

</html>
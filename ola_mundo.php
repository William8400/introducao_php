<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Introdução ao PHP</title>

</head>

<body>

    <?php
    /* 
       Comando para saída de dados 

       echo "Texto"
       print "Texto";
       
       */

    // Estruturas de Dados - ENTRADA 

    // Dados-> Informações-> Conhecimento -> Inteligência

    // $ é para criar uma variável

    // $nome_da_variável = valor da variável
    $nome = "William"; // String(texto)
    $idade = 18; //int(número do tipo inteiro e pode fazer contas)
    $altura = 1.80; //float (É um número decimal)
    $vivo = true; // boolean(Para saber se verdadeiro ou falso)

    //Lista (ARRAY indexado) usa números como índice (ex: 0, 1, 2...).

    $hobbies = ["Caminhar" , "Filmes", "Video Games"];

    // Lista (ARRAY associativo) usa nomes (chaves) como índice (ex: "nome" => "João").

    $pessoa = [

         'nome' => "William",
         'idade' => 18,
         'altura' => 1.80,
         'vivo' => true,
         'hobbies' => ["Caminhar", "filmes", "Video Games"]

    ];
//Interpolação
    
    echo "<h1> Estruturas de dados simples e Arrays indexado </h1>";
// ------------------------------------------------------------------
    echo "<h2> Nome:$nome</h2>";
    echo "<h2> Idade:$idade</h2>";
    echo "<h2> altura:$altura</h2>";
    echo "<h2> Está vivo:$vivo</h2>";
    echo "<h2> hobbie principal:$hobbies[0]<h2/>";
// ------------------------------------------------------------------
    echo "<h1> Array Associativo </h1>";
    
    echo $pessoa['nome'];
    echo $pessoa['idade'];
    echo $pessoa['altura'];
    echo $pessoa['vivo'];
    echo $pessoa['hobbies'][0];

    ?>


</body>

</html>
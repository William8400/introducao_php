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
    $pessoa1 = [

        'nome' => "Harry Potter",
        'idade' => 37,
        'especie' => "humano",
        'vivo' => true,
        'altura' => 1.78,
        'hobbies' => ["Jogar Quadribol", "Explorar Hogwarts", "Passar tempo com amigos", "Lutar contra injustiças","Aprender Feitiços diferentes dos demais"]
    ];
    /*echo "<p> <b> Temos o prazer de informar que você tem uma vaga na Escola de Magia e Bruxaria de Hogwarts. Por favor, encontre em anexo uma lista de todos os livros e equipamentos necessários.
        O ano letivo terá início em 1º de setembro. Aguardamos sua coruja até 31 de julho, no mais tardar, confirmando sua aceitação. </b></p>";
    echo "<h1> Nome do Bruxo de hogwarts</h1>";

    echo "<p> <b>Nome:</b> $nome</p>";
    echo "<p> <b>Idade:</b> $idade</p>";
    echo "<p> <b>Especie:</b> $especie</p>";
    echo "<p> <b>Vivo:</b> " . ($vivo ? "Sim" : "Não") . "</p>";
    echo "<p> <b>Altura:</b> $altura</p>";

    echo "<p> <b>hobby principal:</b> <br> $hobby[0], $hobby[1], $hobby[2], $hobby[3], $hobby[4]</p>";
    //-------------------------------------------------------------------------------------------------
    echo "<p> <b>Nome:</b>". $pessoa1['nome']."</p>";
    echo "<p> <b>Idade:</b>". $pessoa1['idade']."</p>";
    echo "<p> <b>Especie:</b>". $pessoa1['especie']."</p>";
    echo "<p> <b>Vivo:</b> " . ($vivo ? "Sim" : "Não") . "</p>";
    echo "<p> <b>Altura:</b> ".$pessoa1["altura"]."</p>";
    echo "<p> <b>hobby principal:</b> <br> ".$pessoa1["hobbies"][0].", ".$pessoa1["hobbies"][1].", ".$pessoa1["hobbies"][2].", ".$pessoa1["hobbies"][3].".</p>";
    */
    
    
    

    $post = [

        'titulo' => "Carta de Hogwarts",
        'subtitulo' => "Boas vindas a Escola de Hogwarts",
        'imagem' => ["img/Hogwarts.webp",'castelo'],
        'Redação' => "Temos o prazer de informar que você tem uma vaga na Escola de Magia e Bruxaria de Hogwarts. Por favor, encontre em anexo uma lista de todos os livros e equipamentos necessários. O ano letivo terá início em 1º de setembro. Aguardamos sua coruja até 31 de julho, no mais tardar, confirmando sua aceitação.",
        'autor' => $pessoa1
    ];

    
    

    // ----------------------------------------------------------
    ?>

    <article>

    <h1><?php  echo $post['titulo']?></h1>
    <h2><?php echo $post['subtitulo']?></h2>

    <img  src=  "<?php echo $post['imagem'][0]?>" alt="<?php echo $post['imagem'][1]?>">

    <p><?php  echo $post['Redação']?></p>

    <section>

    <h3>Dados Do Aluno</h3>
    <p><strong>Nome:</strong> <?php echo $post['autor']['nome']?></p>
    
    <p><strong>Idade:</strong> <?php echo $post['autor']['idade']?></p>

    <p><strong>Especie:</strong> <?php echo $post['autor']['especie']?></p>

    <p><strong> Está Vivo?:</strong> <?php echo ($post['autor']['vivo']?"Sim":"Não")?></p>

    <h4>hobbies:</h4>
    <ul>
        <li><?php echo $post["autor"]['hobbies'][0] ?></li>
        <li><?php echo $post["autor"]['hobbies'][1] ?></li>
        <li><?php echo $post["autor"]['hobbies'][2] ?></li>
        <li><?php echo $post["autor"]['hobbies'][3] ?></li>
        <li><?php echo $post["autor"]['hobbies'][4]?></li>
    </ul>
    </section>

</article>

</body>

</html>
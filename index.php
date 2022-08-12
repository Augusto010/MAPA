<?php
    include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <nav>
            <h3 class="home">home</h3>
            <h3 class="2">Blog</h3>
            <h3 class="3">Conheça Dona Rita</h3>
        </nav>
    </header>

    <main>
        
            <h1>Confira nossas marmitas:</h1>
            <div class="cardapio">
            <?php
                foreach($marmitas as $key => $value){
                
            ?>
            <article>
                <div class="item">
                <h2><?=$value["nome"];?></h2>
                <a href="#"><img  class="img" src=<?=$value["imagem"];?>></a>
                <p><?=substr($value["tamanho"], 0, 150);?></p>
                <p><?=substr($value["ingredientes"], 0, 150);?></p>
                </div>
            </article>
            <?php
                }
            ?>
            </div>
    </main>

    <footer class="footer"> 
            <div class="item0">
                <h2>Quer saber mais?</h2> 
                <h2 >Nossas páginas:</h2>
                <div class="contato">
                <a href=#> Instagram </a>
                <a href=#> Facebook </a>
                <a href=#> YouTube </a>
                </div>
            </div>
        <div>
            <h2>Aluno: Augusto Henrique</h2>
            <h2>RA: 21103682-5</h2>
        </div>
    </footer>

</body>
</html>
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
        <a href="index.php"><img src="logo.png" class="logo"></a>
        <nav>
            
            <a href="#"><h3 class="home">home</h3></a>
            <a href="#"><h3 class="2">Blog</h3></a>
            <a href="#"><h3 class="3">Conheça Dona Rita</h3></a>
        </nav>
    </header>

    <main>
            <div class="cardapio">
            <?php
            if(isset($_GET["id"]) && !empty($_GET["id"])){
                    //echo"id".$_GET["id"];

                $id = $_GET["id"];
                    //echo "id= ". $id;
                    foreach($marmitas as $key => $value){
                            if($value["id"] == $id){
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
                            }
                    }else{
                        echo"não existe";
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
        <div>
            </h3>quer ficar informado e receber nossas noticias?<h3>
            <form action="pagina1.php" method="POST">
                <input type="text" name="nome" placeholder="Seu nome">
                <input type="email" name="email" placeholder="Seu E-mail">
                <button>OK!</button>
            </form>
        </div>
    </footer>

</body>
</html>
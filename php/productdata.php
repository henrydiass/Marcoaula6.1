<!DOCTYPE html>
<?php

    if(isset($_POST["prod1"])){
        $prod1 = $_POST["prod1"];
        $cor1 = $_POST["cor1"];
        $preco1 = $_POST["preco1"];
    }
    if(isset($_POST["prod2"])){
        $prod1 = $_POST["prod1"];
        $cor2 = $_POST["cor2"];
        $preco2 = $_POST["preco2"];
    }

    $nome = $_POST["nome"];
    $cpf = $_POST["CPF"];
    $aniversario = $_POST["aniversario"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $cep = $_POST["cep"];
    $rua = $_POST["rua"];

    if($prod1){
        $total = $preco1;
    }
    elseif($prod2){
        $total = $preco2;
    }
?>

    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/productdata.css">
        <link href="/styles/fonts.css" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
    <header>
        <a href="../index.php"><h1 id="lnome">LOJA DE CELULAR</h1></a>
    </header>
    <body>
    <form action="" method="post">    
        <!--        Formulário de checkout-->
        <div id="cardprod2" data-page="cardprod">
            <div class="left-column">
                <label for="nome"><p>Nome: <?php echo $nome ?></p></label>
                <label for="cpf"><p>CPF: <?php echo $cpf ?></p></label>
                <label for="aniversario"><p>Aniversario: <?php echo $aniversario ?></p></label>
                <label for="email"><p>E-mail: <?php echo $email ?></p></label>
                <label for="telefone"><p>Telefone: <?php echo $telefone ?></p></label>
                <label for="rua"><p>Rua: <?php echo $rua ?></p></label>
                <label for="cep"><p>CEP: <?php echo $cep ?></p></label>
                <h1>Total <?php echo $total ?></h1><br>
            </div>

            <div class="right-column">
                <label for="formapg" id="labelpg">Forma pagamento<br></label>
                <select name="formapg" id="">
                    <option value="1">PIX +10 % desconto</option>
                    <option value="2">Cartao de credito 5% a mais</option>
                    <option value="3">Cartao de debito 1% a mais</option>
                    <input type="submit" value="Finalizar compra"></button>
                </select>
            </div>
        </div>
        

        <?php 
            if(isset($prod1))
            {
                ?>
                <div id="cardprod1" data-page="cardprod">
                    <div class="produto">
                        <div class="imagem">
                            <img src="../assets/iphone14promax.png" alt="img1" class="imagem">
                        </div>
                        <div class="informacoes">
                            <h2>IPhone 14 Pro Max 512 GB</h2>
                            <p>Cor: Roxa</p>
                            <p>R$ 5000,00</p>
                        </div>
                    </div>
                </div>
                <?php
                require("sqlproxy.php");
                $mysqli->query("INSERT INTO vendas VALUES ('$nome','$cpf','$aniversario','$email','$telefone','$cep','$rua','$prod1','$cor1','$preco1')");
            }
            ?>



            <?php 
            if(isset($prod2))
            {
                ?>
                <div id="cardprod2" data-page="cardprod">
                        <div class="produto">
                            <div class="imagem">
                                <img src="../assets/iphone13.webp" alt="img2">
                            </div>
                            <div class="informacoes">
                                <h2>IPhone 13 128 GB</h2>
                                <p>Cor: Branco</p>
                                <p>R$ 3000,00</p>
                                <input type="checkbox" name="prod2" id="produto">
                            </div>
                        </div>
                </div>
                <?php
                require("sqlproxy.php");
                $mysqli->query("INSERT INTO vendas VALUES ('$nome','$cpf','$aniversario','$email','$telefone','$cep','$rua','$prod2','$cor2','$preco2')");
            }
            ?>
        </form>

        
        
    </body>
</body>
</html>
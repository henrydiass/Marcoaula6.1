<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/productdata.css">
    <link href="/styles/fonts.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefa 1</title>
</head>
<body>
    <header>
        <a href="../index.php"><h1>Loja de Celular</h1></a>
    </header>
    <div>
        <section class="signup-form">
                <?php 

                if (isset($_POST["prod1"]))
                {
                    $prod1 = "IPhone 14 Pro Max 512 GB";
                    $cor1 = "Roxo";
                    $preco1 = 5000;
                    echo "<h1>$prod1, $preco1 R$</h1>"; 
                }
                else{
                    if (!isset($_POST["prod2"])){
                        
                        echo "<h2> Para prosseguir selecione um produto na pagina principal";
                        exit;   
                    }
                }

                if (isset($_POST["prod2"]))
                {
                    $prod2 = "IPhone 13 128 GB R$";
                    $preco2 = 3000;
                    $cor2 = "Branco";
                    echo "<h1> $prod2, $preco2 </h1> ";
                }
                else{
                    if (!isset($_POST["prod1"])){
                        exit;
                        echo "<h2>Para prosseguir selecione um produto na pagina principal";
                    }
                }

                ?>
                <h2>Informações pessoais</h2>
                <form action="productdata.php" method="post">
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="" size="50" maxlength="50" required>
                    <br/>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="CPF" id="" required minglength="11" maxlength="11" placeholder="sem pontuação">
                    <br/>
                    <label for="aniversario">Data de nascimento: </label>
                    <input type="date" name="aniversario" id="" required>
                    <br/>
                    <label for="email">E-Mail: </label>
                    <input type="text" name="email" size="50" maxlength="50">
                    <br/>
                    <label for="telefone">Telefone: </label>
                    <input type="tel" name="telefone" placeholder="14999999999" maxlength="11">
                    <br/>

                    <h2>informacoes de entrega</h2>
                    <label for="CEP">CEP: </label>
                    <input type="text" name="cep" maxlength="9" placeholder="00000-000" required>
                    <label for="Rua">Rua: </label>
                    <input type="text" name="rua" required>
                    <label for="cidade">Cidade: </label>
                    <input type="text" name="cidade" required>
                    <label for="bairro">Bairro: </label>
                    <input type="text" name="bairro" required>
                    <input type="hidden" name="prod1" value="<?php echo $prod1; ?>">
                    <input type="hidden" name="cor1" value="<?php echo $cor1; ?>">
                    <input type="hidden" name="preco1" value="<?php echo $preco1; ?>">
                    <input type="hidden" name="prod2" value="<?php echo $prod2; ?>">
                    <input type="hidden" name="cor2" value="<?php echo $cor2; ?>">
                    <input type="hidden" name="preco2" value="<?php echo $preco2; ?>">
                    <button type="submit" id="clibutton">Proximo</button>
            </form>
        </section>
    </div>
</body>
</html>
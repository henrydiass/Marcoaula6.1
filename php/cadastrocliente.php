<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Tarefa 1</title>
</head>
<body>
    <header>
        <a href="../index.php"> <h1>Loja de Celular</h1></a><a href="/cadastrocliente.php"><h1>Cadastro de cliente</h1></a>
    </header>

    <main>
                <h2>Informações pessoais</h2>
                <form action="" method="POST" id="cadcli">

                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="" size="50" maxlength="50" required>
                    <br/>
                    <label for="cpf">CPF: </label>
                    <input type="text" name="cpf" id="" required minglength="11" maxlength="11" placeholder="sem pontuação">
                    <br/>
                    <label for="aniversario">Data de nascimento: </label>
                    <input type="date" name="aniversario" id="" required>
                    <br/>
                    <label for="email">E-Mail: </label>
                    <input type="text" name="email" size="50" maxlength="50">
                    <br/>
                    <label for="tel">Telefone: </label>
                    <input type="tel" name="tel" placeholder="1499999999" maxlength="12" >
                    <br/>
                    <label for="rua">Rua: </label>
                    <input type="rua" name="rua" placeholder="">
                    <br/>
                    <label for="bairro">Bairro: </label>
                    <input type="bairro" name="bairro" placeholder="">
                    <br/>
                    <label for="cep">CEP: </label>
                    <input type="cep" name="cep">
                    <br/>

                    <input type="submit" name="enviar" value="enviar">
                    <?php
                    require("sqlproxy.php");
                    if(isset($_POST["enviar"])){
                        $nome = $_POST["nome"];
                        $cpf = $_POST["cpf"];
                        $aniversario = $_POST["aniversario"];
                        $email = $_POST["email"];
                        $tel = $_POST["tel"];
                        $rua = $_POST["rua"];
                        $bairro = $_POST["bairro"];
                        $cep = $_POST["cep"];
                        $mysqli->query("INSERT INTO cadcli VALUES ('$nome', '$cpf', '$aniversario', '$email', '$tel', '$rua', '$bairro', '$cep')");
                        echo "DADOS INSERIDOS NA TABELA";
                }

                    
                    
                ?>   
                </form> 
                            
    </main>

    
</body>
    
</html>
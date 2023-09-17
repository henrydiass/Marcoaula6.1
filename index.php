<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link href="/styles/fonts.css" rel="stylesheet">
    <title>Tarefa 1</title>
</head>
<body>  
    <header>
        <a href="index.php"> <h1>Loja de Celular</h1></a><a href="php/cadastrocliente.php"><h1>Cadastro de clientes</h1></a>   
    </header>
    
    <main>    
    <div id="cardprod1" data-page="cardprod">
        <form action="php/clientdata.php" method="POST">
            <div class="produto">
                <div class="imagem">
                    <img src="assets/iphone14promax.png" alt="img1" class="imagem">
                </div>
                <div class="informacoes">
                    <h2>IPhone 14 Pro Max 512 GB</h2>
                    <p>Cor: Roxa</p>
                    <p>R$ 5000,00</p>
                    <input type="checkbox" name="prod1" id="produto">
                    <button type="submit" value="Adicionar ao carrinho">Adicionar ao carrinho</button>
                    
                </div>
            </div>
        </form>
    </div>
        
        
    <div id="cardprod2" data-page="cardprod">
        <form action="php/clientdata.php" method="POST">
            <div class="produto">
                <div class="imagem">
                    <img src="assets/iphone13.webp" alt="img2">
                </div>
                <div class="informacoes">
                    <h2>IPhone 13 128 GB</h2>
                    <p>Cor: Branco</p>
                    <p>R$ 3000,00</p>
                    <input type="checkbox" name="prod2" id="produto">
                    <button type="submit" value="Adicionar ao carrinho">Adicionar ao carrinho</button>
                </div>
            </div>
        </form>
    </div>
    
    <footer>
        
    </footer>
    
    </main>
</body>
</html>
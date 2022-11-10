
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=opera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ</title>
    <link rel="stylesheet" href="perfil.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="perfil.js"></script>
</head>
<body>



    <h1>Olá, voçe esta no quiz da tropa do baguncinha!°</h1>
    
    <main>
        <div class="caixa">
        <form method="post" action="../frontpage/frontpage.php">
            <label id="text">Digite seu usuario:</label>
            <br>
                <input id="input-name" type="text" placeholder="Ex: Boladão da silva" name="usr" autocomplete="mobile" required>
                <br> 
                <label id="text">Digite seu curso:</label>
                <br><br>
                <a href="../frontpage/frontpage.php"><input type="submit" onclick="salvar()" value="Iniciar QUIZ" id="entrar" name="entrar"></a>
                
        </form>
        </div> 
    </main>

    
</body>
</html>




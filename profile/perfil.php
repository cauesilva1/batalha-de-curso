<?php
if ((isset($_POST['usr']))&&(!empty($_POST['usr']))) {

	$conexao = mysqli_connect("localhost", "Walker", "Venula111", "login");
	
	$usr = $_POST['usr'];
	
	$string_sql = "INSERT INTO user(username) VALUES ('${usr}')";
	
	$insert_member_res = mysqli_query($conexao, $string_sql);
	
	if(mysqli_affected_rows($conexao)>0){
		
		echo "<p>Usuário registrado</p>";
		echo '<a href="perfil.php">Voltar para formulário de cadastro</a>';
        header('Location: ../frontpage/frontpage.php');
		
	} else {
	
		echo "Erro, não foi possível inserir no banco de dados";
	
	}
	
	mysqli_close($conexao);
	
}
?>

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
        <form method="post" action="perfil.php">
            <label id="text">Digite seu usuario:</label>
                <input id="input-name" type="text" placeholder="Ex: João da silva" name="usr" autocomplete="mobile" required>

                <a href="../frontpage/frontpage.php"><input type="submit" onclick="salvar()" value="Iniciar QUIZ" id="entrar" name="entrar"></a>
                
        </form>
            
    </main>

    
</body>
</html>




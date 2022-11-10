<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=opera">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZ DO BAGUNCINHA</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="perfil.js"></script>
</head>
<body>
	<div class="box">
	<form method="post" action="../frontpage/frontpage.php">
			<h2>Tropa do Baguncinha</h2>
			<div class="inputBox">
            <input id="input-name" type="text"  name="usr" autocomplete="mobile" required>
				<span>Username</span>
				<i></i>
			</div>
			<div class="inputBox">
            <input id="input-name" type="text"  name="course" autocomplete="mobile" required>
				<span>Curso</span>
				<i></i>
			</div>
	
			<a href="../frontpage/frontpage.php"><input type="submit" onclick="salvar()" value="Iniciar" id="entrar" name="entrar"></a>
           
                
        
		</form>
	</div>
</body>
</html>
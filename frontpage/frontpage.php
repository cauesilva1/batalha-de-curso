<?php

  $conexao = mysqli_connect("localhost", "Walker", "Venula111", "login");

  $usr = $_POST['usr'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>QUIZ</title>
  <link rel="stylesheet" href="frontpage.css" />
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="frontpage.js"></script>
</head>

<body>
  <h1>perguntas.....</h1>

  <div id="main">
    <span class="questionTitle">
      <h2 class="pg">Pergunta</h2>
      <h1 id="qnum"></h1>
    </span>

    <h2 id="numQuestao"></h2>
    <div class="corpo">
      <div id="perguntas">
        <p id="qst">
          Qual a ciência que estuda a atmosfera da Terra e a climatologia??
        </p>
      </div>
      <form id="respostas">
        <input type="RADIO" name="OPCAO" value="1" id="opt" />
        <label id="resposta1">Astronomia</label>
        <br />
        <input type="RADIO" name="OPCAO" value="2" id="opt" />
        <label id="resposta2">Horologia</label>
        <br />
        <input type="RADIO" name="OPCAO" value="3" id="opt" />
        <label id="resposta3">Dispersão atmosférica</label>
        <br />
        <input type="RADIO" name="OPCAO" value="4" id="opt" />
        <label id="resposta4">Meteorologia</label>
        <button type="submit">Confirmar</button>
      </form>
    </div>
  </div>


  <div id="modal">
    <form action="score.php" method="POST">
      <h2>seu quiz acabou!!</h2>
      <h2>essa é sua pontuação</h2>
      <h2 id="placar">pontos:</h2>
      <h2 id="pontos">0</h2>

      <input type="hidden" id="score" name="score">
      <input type="hidden" id="username" name="username" value=<?php echo $usr?>>
      <!-- <input type="hidden" id="course" name="course" value=<?php echo $course?>> -->

      <button type="submit">Salvar Pontuação</button>

      <!-- <button type="button" onclick="$('#modal').hide()">Salvar Pontuacao</button> -->
    </form>


  </div>


</body>

</html>
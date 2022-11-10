<?php
 $conexao = mysqli_connect("localhost", "Walker", "Venula111", "login");

 $consulta = "SELECT * FROM user order by score desc";
 $con = $conexao ->query($consulta);

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>How to Style HTML Tables with CSS</title>
    <link rel="stylesheet" href="rankpage.css">
</head>
<body>
    <table class="content-table">
        <thead>
          <tr>
          <th>ID</th>
            <th>Nome</th>
            <th>Score</th>
            <th>Curso</th>
          </tr>
        </thead>
        <tbody>
          <?php while($dado = $con->fetch_array()){ ?>
          <tr>
          <td><?php $dado["id"];?></td>
            <td><?php $dado["username"];?></td>
            <td><?php $dado["score"];?></td>
            <td><?php $dado["course"];?></td>
          </tr>

          <?php } ?>
          <tr class="active-row">
           
          </tr>
         
        </tbody>
      </table>
</body>
</html>
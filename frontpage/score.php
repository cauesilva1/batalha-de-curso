<?php


$pdo = new PDO('mysql:host=localhost;dbname=login', 'Walker', 'Venula111');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;

    $score = $_POST['score'];
    $username = $_POST['username'];


    $sql = "INSERT INTO user VALUES (default, :username, :score)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':username', $username, PDO::PARAM_STR);
        $sql->bindParam(':score', $score, PDO::PARAM_STR);
        $sql->execute();


        $res_sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(count($res_sql) > 0) {
          echo "<h2>Pontuacao validada</h2>";
        } else {
            echo "Error";
            header("Location: ../profile/perfil.php");
        }

?>
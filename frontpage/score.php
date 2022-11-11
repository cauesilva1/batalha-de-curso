<?php


$pdo = new PDO('mysql:host=localhost;dbname=', 'login', 'senha');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);;

    $score = $_POST['score'];
    $username = $_POST['username'];
    $course = $_POST['course'];


    $sql = "INSERT INTO user VALUES (default, :username, :score, :course)";
        $sql = $pdo->prepare($sql);
        $sql->bindParam(':username', $username, PDO::PARAM_STR);
        $sql->bindParam(':score', $score, PDO::PARAM_STR);
        $sql->bindParam(':course', $course, PDO::PARAM_STR);
        $sql->execute();


        $res_sql = $sql->fetchAll(PDO::FETCH_ASSOC);

        if(count($res_sql) > 0) {
          echo "<h2>Pontuacao validada</h2>";
        } else {
            echo "Error";
            header("Location: ../profile/lgn.php");
        }

?>
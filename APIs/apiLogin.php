<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      //$token = "1f3d2gs3f2fg3as2fdg3re2t1we46er45";
      //$email = "lucasmarques73@hotmail.com";
      //$senha = "123";

    if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

            $sql = "SELECT p.idPessoa AS ID ,p.nomePessoa AS Nome, p.rgPessoa AS RG, p.cpfPessoa AS CPF, p.sexoPessoa AS Sexo, DATE_FORMAT(p.dtNascPessoa,'%d/%m/%Y') AS DataDeNascimento, p.email AS Email, p.senha AS Senha  FROM tblpessoa p WHERE email = :email  AND senha = MD5(:senha)";
            $exec = $con->prepare($sql);
            $exec->bindParam(':email', $email);
            $exec->bindParam(':senha', $senha);
            $exec->execute();

            $vetor = [];
            while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                    $vetor[] = $row ;

            }

            echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
    }
    else{
      echo "Erro ao conectar com o banco!";
    }





?>

<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $idCatProfissao = $_POST['idCatProfissao'];

      //$token = "1f3d2gs3f2fg3as2fdg3re2t1we46er45";
      //$email = "lucasmarques73@hotmail.com";
      //$senha = "123";

    if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

            $sql = "SELECT p.nomePessoa AS Nome , prof.descProfissao,ROUND(prof.notaProfissao, 2 ) AS Avaliacao ,cat.CatProfissao AS CatProfissao, prof.idProfissao FROM tblpessoa p INNER JOIN tblprofissao prof ON p.idPessoa = prof.tblpessoa_idPessoa INNER JOIN tblcatprofissao cat ON prof.tblCatProfissao_idtblCatProfissao = cat.idtblCatProfissao WHERE p.idPessoa = :id AND cat.idtblCatProfissao = :idCatProfissao";
            $exec = $con->prepare($sql);
            $exec->bindParam(':id', $id);
            $exec->bindParam(':idCatProfissao', $idCatProfissao);
            $exec->execute();

            while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                    $vetor[] = $row ;

            }

            echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
    }
    else{
      echo "Erro ao conectar com o banco!";
    }





?>

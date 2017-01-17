<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

        $token = $_POST['token'];
        $id = $_POST['id'];
        $acao = $_POST['acao'];

      if ($acao == '1') {

          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT * FROM tblcatprofissao ORDER BY CatProfissao";
                  $exec = $con->prepare($sql);
                  $exec->execute();

                  while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                          $vetor[] = $row ;
                  }

                  echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
          }
          else{
            echo "Erro ao conectar com o banco!";
          }

        }else if($acao == '2'){

          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT * FROM tblcatprofissao WHERE idtblCatProfissao = :id";
                  $exec = $con->prepare($sql);
                  $exec->bindParam(':id', $id);
                  $exec->execute();

                  while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                          $vetor[] = $row ;
                  }

                  echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
          }
          else{
            echo "Erro ao conectar com o banco!";
          }


        }




?>

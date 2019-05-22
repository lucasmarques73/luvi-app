<?php

      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      //Id da pessoa que está sendo exibido o perfil
      $id = $_POST['id'];
      $acao = $_POST['acao'];
      //Parametros para a segunda ação

      $idProfissao = $_POST['idProfissao'];
      

      if ($acao == "1") {
          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT p.nomePessoa AS Nome, DATE_FORMAT(ava.dtAvaliacao,'%d/%m/%Y')AS 'DataAvaliacao',ROUND(ava.notaAvaliacao,2) AS 'Avaliacao', ava.descAvaliacao AS 'Descricao', prof.descProfissao AS 'Profissao' FROM tblpessoa p INNER JOIN tblavaliacao ava ON p.idPessoa = ava.tblpessoa_idPessoa INNER JOIN tblprofissao prof ON prof.idProfissao = ava.tblprofissao_idProfissao INNER JOIN tblpessoa pe ON prof.tblpessoa_idPessoa = pe.idPessoa WHERE pe.idPessoa = :id AND prof.idProfissao = :idProfissao  ORDER BY ava.dtAvaliacao DESC";
                  $exec = $con->prepare($sql);
                  $exec->bindParam(':id', $id);
                  $exec->bindParam(':idProfissao', $idProfissao);
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
   }
     else if($acao == "2"){
       if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

        $notaAvaliacao = $_POST['notaAvaliacao'];
        $descAvaliacao = $_POST['descAvaliacao'];
        $idPessoa = $_POST['idPessoa'];
        

               $sql = "call insereAval(:notaAvaliacao,:descAvaliacao,CURRENT_DATE(),:idPessoa,:idProfissao);";
               $exec = $con->prepare($sql);
               $exec->bindParam(':notaAvaliacao', $notaAvaliacao);
               $exec->bindParam(':descAvaliacao', $descAvaliacao);
               $exec->bindParam(':idPessoa', $idPessoa);
               $exec->bindParam(':idProfissao', $idProfissao);
               $exec->execute();

                 echo "Avaliado com Sucesso!";


      }
       else{
         echo "Erro ao conectar com o banco!";
       }

     }


?>

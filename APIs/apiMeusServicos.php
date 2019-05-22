<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $acao = $_POST['acao'];
     


      if ($acao == '1') {

          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT p.tblpessoa_idPessoa AS IdPessoa, cat.idtblCatProfissao AS IdCatProfissao, cat.CatProfissao, p.descProfissao AS descProfissao, cat.icone FROM tblprofissao p INNER JOIN tblcatprofissao cat ON p.tblCatProfissao_idtblCatProfissao = cat.idtblCatProfissao WHERE tblpessoa_idPessoa = :id ORDER BY cat.CatProfissao";
                  $exec = $con->prepare($sql);
                  $exec->bindParam(':id', $id);
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

        }else if ($acao = '2')
        {
          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

            $descProfissao = $_POST['descProfissao'];
            $idTipoServico = $_POST['idTipoServico'];

                      $sql = "INSERT INTO tblprofissao (descProfissao, notaProfissao, tblpessoa_idPessoa, tblcatprofissao_idtblCatProfissao) VALUES ( :descProfissao, 0, :id , :idTipoServico)";
                      $exec = $con->prepare($sql);
                      $exec->bindParam(':id', $id);
                      $exec->bindParam(':descProfissao', $descProfissao);
                      $exec->bindParam(':idTipoServico', $idTipoServico);
                      $exec->execute();

                      echo "Cadastrado Com Sucesso!";
          }
          else{
            echo "Erro ao conectar com o banco!";
          }
        }








  ?>

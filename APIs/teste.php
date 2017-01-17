<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

          $id = '17';
          $descProfissao = 'teste';
          $idTipoServico = '2';

          //$id = stripslashes($id);
          //$descProfissao = stripslashes($descProfissao);
          //$idTipoServico = stripslashes($idTipoServico);

          //$id = trim($id);
          //$descProfissao = trim($descProfissao);
          //$idTipoServico = trim($idTipoServico);

          if ($con) {
                      $sql = "INSERT INTO tblprofissao (descProfissao, notaProfissao, tblpessoa_idPessoa, tblcatprofissao_idtblCatProfissao) VALUES ( :descProfissao, 0, :id , :idTipoServico)";
                      $exec = $con->prepare($sql);
                      $exec->bindParam(':id', $id);
                      $exec->bindParam(':descProfissao', $descProfissao);
                      $exec->bindParam(':idTipoServico', $idTipoServico);
                      $exec->execute();

                      echo "Cadastrado Com Sucesso!";
          }else{
        echo "Não foi possivel iserir os dados! Tente novamente mais tarde.";
    }

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

            try {
              $sql = "call insereNovoUsuario( :nome, :rg, :cpf, :sexo, :dtnasc, :foto, :email, :senha )";//Procedute que insere os dados e retorna o usuário cadastrado
              $exec = $con->prepare($sql);
              $exec->bindValue(':nome', "Lucas Marques");//Parametros
              $exec->bindValue(':rg', "123123213");//Parametros
              $exec->bindValue(':cpf', "111111111");//Parametros
              $exec->bindValue(':sexo', "M");//Parametros
              $exec->bindValue(':dtnasc', "20/08/1990");//Parametros
              $exec->bindValue(':foto', "");//Parametros
              $exec->bindValue(':email', "lucas1@yopmail.com");//Parametros
              $exec->bindValue(':senha', "lucas123");//Parametros
              $exec->execute();

              $vetor = [];
              while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                      $vetor[] = $row ;
              }

              echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
            } catch ( Exception $e){
              echo $e->getMessage();
            }
              
          }else{
        echo "Não foi possivel iserir os dados! Tente novamente mais tarde.";
    }

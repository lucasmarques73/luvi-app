<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      //Dados para conexão com o banco
      require_once 'conexao.php';

      $foto = "vazio";//Por enquanto não vamos trabalhar com fotos
      $email = "vazio";//Por enquanto não vamos trabalhar com fotos
      $senha = "vazio";//Por enquanto não vamos trabalhar com fotos

      //Recebo os dados da requisição ajax;
      $token = $_POST['token'];
      $id = $_POST['id'];
      $nome = $_POST['nome'];
      $rg = $_POST['rg'];
      $cpf = $_POST['cpf'];
      $dtnasc = $_POST['dtnasc'];
      $sexo = $_POST['sexo'];

      //TEstar API
      //$token = "1f3d2gs3f2fg3as2fdg3re2t1we46er45";
      //$id = "14";
      //$nome = "João";
      //$rg = "123";
      //$cpf = "123";
      //$dtnasc = "12/12/1990";
      //$sexo = "M";

      // LIMPA OS DADOS
        $id = stripslashes($id);
        $nome = stripslashes($nome);
        $rg = stripslashes($rg);
        $cpf = stripslashes($cpf);
        $dtnasc = stripslashes($dtnasc);
        $sexo = stripslashes($sexo);

        $id = trim($id);
        $nome = trim($nome);
        $rg = trim($rg);
        $cpf = trim($cpf);
        $dtnasc = trim($dtnasc);
        $sexo = trim($sexo);

        if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

              $sql = "call atualizaUsuario(:id, :nome, :rg, :cpf, :sexo, :dtnasc, :foto , :email, :senha)";//Procedute que insere os dados e retorna o usuário cadastrado
              $exec = $con->prepare($sql);
              $exec->bindParam(':id', $id);//Parametros
              $exec->bindParam(':nome', $nome);//Parametros
              $exec->bindParam(':rg', $rg);//Parametros
              $exec->bindParam(':cpf', $cpf);//Parametros
              $exec->bindParam(':sexo', $sexo);//Parametros
              $exec->bindParam(':dtnasc', $dtnasc);//Parametros
              $exec->bindParam(':foto', $foto);//Parametros
              $exec->bindParam(':email', $email);//Parametros
              $exec->bindParam(':senha', $senha);//Parametros
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

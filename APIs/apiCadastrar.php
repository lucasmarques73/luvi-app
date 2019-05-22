<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      //Dados para conexão com o banco
      require_once 'conexao.php';

      $foto = "vazio";//Por enquanto não vamos trabalhar com fotos

      //Recebo os dados da requisição ajax;
      $token = $_POST['token'];
      $nome = $_POST['nome'];
      $rg = $_POST['rg'];
      $cpf = $_POST['cpf'];
      $dtnasc = $_POST['dtnasc'];
      $sexo = $_POST['sexo'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      //Imprimir váriaveis para saber se recebeu corretamente do Ajax(ISSO É UM TESTE)
    //  echo $token;
    //  echo $nome;
      //echo $rg;
      //echo $cpf;
      //echo $dtnasc;
      //echo $sexo;
    //  echo $email;
    //  echo $senha;

      //TEstar API
      //$token = "1f3d2gs3f2fg3as2fdg3re2t1we46er45";
      //$nome = "João";
      //$rg = "123";
      //$cpf = "123";
       //$dtnasc = "12/12/1980";
      //$sexo = "M";
      //$email = "joao@joao.com";
      //$senha = "123";

      // LIMPA OS DADOS
        $nome = stripslashes($nome);
        $rg = stripslashes($rg);
        $cpf = stripslashes($cpf);
        $dtnasc = stripslashes($dtnasc);
        $sexo = stripslashes($sexo);
        $email = stripslashes($email);
        $senha = stripslashes($senha);

        $nome = trim($nome);
        $rg = trim($rg);
        $cpf = trim($cpf);
        $dtnasc = trim($dtnasc);
        $sexo = trim($sexo);
        $email = trim($email);
        $senha = trim($senha);

        //Se o token que veio pela requisição for igual a este
    if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

          $sql = "call insereNovoUsuario( :nome, :rg, :cpf, :sexo, :dtnasc, :foto, :email, :senha )";//Procedute que insere os dados e retorna o usuário cadastrado
          $exec = $con->prepare($sql);
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

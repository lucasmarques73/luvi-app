<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      //Dados para conexão com o banco
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $id = stripslashes($id);
      $email = stripslashes($email);
      $senha = stripslashes($senha);

      $id = trim($id);
      $email = trim($email);
      $senha = trim($senha);


        if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

              $sql = "call atualizaSenha( :id, :email, :senha )";//Procedute que insere os dados e retorna o usuário cadastrado
              $exec = $con->prepare($sql);
              $exec->bindParam(':id', $id);//Parametros
              $exec->bindParam(':email', $email);//Parametros
              $exec->bindParam(':senha', $senha);//Parametros
              $exec->execute();

              $vetor = [];
              while($row=$exec->fetch(PDO::FETCH_ASSOC)){
                      $vetor[] = $row ;
              }

              if ($vetor) {
                echo json_encode($vetor,JSON_UNESCAPED_UNICODE);
            }

             else { 
 echo "null";
}
        }
        else{
          echo "Erro ao conectar com o banco!";
        }


?>

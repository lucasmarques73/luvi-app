<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $idUser = $_POST['idUser'];
      
      $acao = $_POST['acao'];

      if ($acao == '1') {

      if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT p.idPessoa AS idUsuario, pe.idPessoa, pe.nomePessoa, cat.CatProfissao, prof.descProfissao,prof.idProfissao ,cat.idtblCatProfissao FROM tblpessoa p INNER JOIN tblfavoritos fav ON p.idPessoa = tblpessoa_idPessoa INNER JOIN tblprofissao prof ON prof.idProfissao = tblprofissao_idProfissao INNER JOIN tblcatprofissao cat ON cat.idtblCatProfissao=prof.tblCatProfissao_idtblCatProfissao INNER JOIN tblpessoa pe ON prof.tblpessoa_idPessoa = pe.idPessoa WHERE p.idPessoa = :idUser AND pe.idPessoa = :id";
                  $exec = $con->prepare($sql);
                  $exec->bindParam(':id', $id);
                  $exec->bindParam(':idUser', $idUser);
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

      }else if ($acao = '2'){
        if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

          $idProfissao = $_POST['idProfissao'];

          $sql = "INSERT INTO tblfavoritos (descFavoritos, tblpessoa_idPessoa, tblprofissao_idProfissao) VALUES ('Formatou meu Computador',:idUser,:idProfissao);";
          $exec = $con->prepare($sql);
          $exec->bindParam(':idProfissao', $idProfissao);
          $exec->bindParam(':idUser', $idUser);
          $exec->execute();

          echo "OK";

          }
          else{
            echo "Erro ao conectar com o banco!";
          }

      }

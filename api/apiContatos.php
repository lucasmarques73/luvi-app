<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $acao = $_POST['acao'];
    

      //$token = "1f3d2gs3f2fg3as2fdg3re2t1we46er45";
      //$email = "lucasmarques73@hotmail.com";
      //$senha = "123";
    if ($acao == "1") {
        if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                $sql = "SELECT tc.tipoContato, c.Contato , tc.icone FROM tblpessoa  p INNER JOIN tblcontato c ON c.tblpessoa_idPessoa=p.idPessoa INNER JOIN  tbltipocontato tc ON tc.idTipoContato=c.tbltipocontato_idTipoContato  WHERE p.idPessoa = :id ORDER BY p.nomePessoa ASC";
                $exec = $con->prepare($sql);
                $exec->bindParam(':id', $id);
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
    }else if ($acao == "2") {
          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                $tipoContato = $_POST['tipocontato'];
                $contato = $_POST['contato'];

                  $sql = "INSERT INTO tblcontato (Contato, tbltipocontato_idTipoContato,tblpessoa_idPessoa) VALUES(:contato, :tipocontato, :id)";
                  $exec = $con->prepare($sql);
                  $exec->bindParam(':id', $id);
                  $exec->bindParam(':contato', $contato);
                  $exec->bindParam(':tipocontato', $tipoContato);
                  $exec->execute();

                  echo "O contato foi inserido com sucesso";

          }
          else{
            echo "Erro ao conectar com o banco!";
          }
}




?>

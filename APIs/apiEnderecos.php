<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

      $token = $_POST['token'];
      $id = $_POST['id'];
      $acao = $_POST['acao'];
      //Parametros para INSERT
     


      // echo $id;
      // echo $rua;
      // echo $numero;
      // echo $complemento;
      // echo $bairro;
      // echo $cidade;
      // echo $estado;
      // echo $cep;


      if ($acao == "1") {
          if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                  $sql = "SELECT p.idPessoa AS IdPessoa, e.ruaEnd AS Rua, e.numEnd AS Numero, e.complementoEnd AS Complemento, e.bairroEnd AS Bairro, e.cidadeEnd AS Cidade, e.estadoEnd AS Estado, e.cepEnd AS CEP FROM tblpessoa p INNER JOIN tblendereco e ON p.idPessoa = e.tblpessoa_idPessoa WHERE p.idPessoa = :id";
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
        }else if ($acao == "2") {
              if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

                $rua = $_POST['rua'];
                $numero = $_POST['numero'];
                $complemento = $_POST['complemento'];
                $bairro = $_POST['bairro'];
                $cidade = $_POST['cidade'];
                $estado = $_POST['estado'];
                $cep = $_POST['cep'];

                      $sql = "INSERT INTO tblendereco (ruaEnd, numEnd, complementoEnd, bairroEnd, cidadeEnd, estadoEnd, tblpessoa_idPessoa, cepEnd) VALUES (:rua, :numero, :complemento, :bairro, :cidade, :estado, :id, :cep )";
                      $exec = $con->prepare($sql);
                      $exec->bindParam(':id', $id);
                      $exec->bindParam(':rua', $rua);
                      $exec->bindParam(':numero', $numero);
                      $exec->bindParam(':complemento', $complemento);
                      $exec->bindParam(':bairro', $bairro);
                      $exec->bindParam(':cidade', $cidade);
                      $exec->bindParam(':estado', $estado);
                      $exec->bindParam(':cep', $cep);
                      $exec->execute();

                      echo "O endereço foi inserido com sucesso";

              }
              else{
                echo "Erro ao conectar com o banco!";
              }
      }

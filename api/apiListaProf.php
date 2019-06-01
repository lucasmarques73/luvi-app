<?php
      header("Access-Control-Allow-Origin: *");
      header('Content-Type: text/html; charset=utf-8');
      require_once 'conexao.php';

        $token = $_POST['token'];
        $id = $_POST['id'];

    if ($token === "1f3d2gs3f2fg3as2fdg3re2t1we46er45") {

            $sql = "SELECT prof.idProfissao AS IdProfissao, p.idPessoa AS IdPessoa, p.nomePessoa AS Nome,cat.CatProfissao AS Profissao,prof.descProfissao AS Descricao, ROUND(prof.notaProfissao, 2 ) AS Avaliacao FROM tblpessoa p INNER JOIN tblprofissao prof ON p.idPessoa = prof.tblpessoa_idPessoa INNER JOIN tblcatprofissao cat ON prof.tblCatProfissao_idtblCatProfissao = cat.idtblCatProfissao WHERE cat.idtblCatProfissao = :id ORDER BY prof.notaProfissao DESC";
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


?>

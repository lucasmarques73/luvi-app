<?php

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: text/html; charset=utf-8');

        $dns = "mysql:host=localhost;dbname=id9684218_luvi";
        $user = 'id9684218_admin';
        $pass = '!@#123';

        try {
                $con = new PDO($dns, $user, $pass);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                if(!$con){
                          echo "Não foi possivel conectar com Banco de Dados!";
                }

        } catch (Exception $e) {
        	echo "Erro: ". $e->getMessage();
        };

?>

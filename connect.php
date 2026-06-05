<?php
  function connect(){
      $host = 'stock'; // Coloca a porta se precisar, ex: 'localhost:3306'
      $user = 'root';
      $psw = '';
      $dbname = 'stock';

      try{
      $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $psw);
      //Configurar o pdo para lançar exceções sempre que houver um erro 
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Conectado com sucesso!!!";
      return $conexao;
      }
      catch (PDOException $e) {
          echo "Erro ao conectar: " . $e->getMessage();
          exit;
      }
  }
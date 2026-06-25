<?php
  function connect(){
      $host = 'sql104.infinityfree.com'; // Coloca a porta se precisar, ex: 'localhost:3306'
      $user = 'if0_42263515';
      $psw = 'breno10082006';
      $dbname = 'if0_42263515_stock';

      $conexao = new PDO("mysql:host=$host;dbname=$dbname", $user, $psw);
      //Configurar o pdo para lançar exceções sempre que houver um erro 
      $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conexao;
  }
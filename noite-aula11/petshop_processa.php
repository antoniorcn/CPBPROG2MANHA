<?php

  $nome_cachorro = $_REQUEST['txtNome'];
  $raca = $_REQUEST['txtRaca'];
  $nome_dono = $_REQUEST['txtNomeDono'];
  $peso = $_REQUEST['txtPeso'];
  $nascimento = $_REQUEST['txtNascimento'];

  $db = new PDO(
  'mysql:host=localhost;dbname=petshop;charset=utf8',
  'root', '');
  echo "Conexão OK! <BR>";

  $sql = "INSERT INTO animais ".
          "(id, nome, raca, nascimento, nome_dono, peso) ".
          "VALUES (0, '$nome_cachorro', '$raca', '$nascimento', '$nome_dono', $peso)";

  $db->exec($sql);
?>

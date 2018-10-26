<?php

  $cmd = $_REQUEST['cmd'];
  $nome_cachorro = $_REQUEST['txtNome'];
  $raca = $_REQUEST['txtRaca'];
  $nome_dono = $_REQUEST['txtNomeDono'];
  $peso = $_REQUEST['txtPeso'];
  $nascimento = $_REQUEST['txtNascimento'];

  session_start();

  $db = new PDO(
  'mysql:host=localhost;dbname=petshop;charset=utf8',
  'root', '');

  if ($cmd == "adicionar") {
    $sql = "INSERT INTO animais ".
            "(id, nome, raca, nascimento, nome_dono, peso) ".
            "VALUES (0, '$nome_cachorro', '$raca', '$nascimento', '$nome_dono', $peso)";

    $db->exec($sql);
    $_SESSION['MENSAGEM'] = "Animal inserido com sucesso";
  } else if ($cmd == "pesquisar") {
    $sql = "SELECT * FROM animais WHERE nome like '%$nome_cachorro%'";
    $stmt = $db->query($sql);
    $lista = array();
    $_SESSION['MENSAGEM'] = "Foram encontrados ".$stmt->rowCount()." resultados";
    forEach( $stmt as $row ) {
      array_push($lista, $row);
    }
    $_SESSION['LISTA'] = $lista;
//    	echo $row['id']." - " .$row['titulo']."<BR/>";
//    }

  }
  header("Location: ./pets.php");
?>

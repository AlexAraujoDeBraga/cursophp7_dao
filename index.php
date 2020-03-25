<?php
    require_once("config.php");
    echo "carrega um usuário específico";

    $root = new Usuario();
    $root->loadById(1);
    echo $root;
    echo "</br>";

    echo "Carrega lista de todos os usuários";
    $lista = Usuario::getList();
    echo json_encode($lista);
    echo "</br>";

    echo "Carrega somente os usuários que tenham iniciais jo";
    $search = Usuario::search("jo");
    echo json_encode($search);
    echo "</br>";
    
    echo "Carrega um usuário usando o login e a senha";
    $usuario = new Usuario();
    $usuario->login("joao", "123");
    echo $usuario;
    echo "</br>";

?>
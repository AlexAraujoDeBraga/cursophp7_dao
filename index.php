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

    echo "insert de usuário novo";
    $aluno = new Usuario("aluno","@aluno0");
    $aluno->insert();
    echo $aluno;
    echo "</br>";

    echo "update de usuario";
    $usuario2 = new Usuario();
    $usuario2->loadById(3);
    $usuario2->update("professor","vamoslá!9090");
    echo $usuario2;
    echo "</br>";

    echo "deletar usuario";
    $usuario3 = new Usuario();
    $usuario3->loadById(4);
    $usuario3->delete();
    echo $usuario3;
    echo "</br>";

?>
<?php
    session_start();
    
    $usuario_autenticado = false;
    $usuarios_app = array(
        array('email' => 'adm@teste.com', 'senha' => '12345'),
        array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
    );

    foreach($usuarios_app as $user) {
        if($user['email'] ==  $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
        };
    };

    if($usuario_autenticado) {
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'SIM';
        $_SESSION['y'] = 'SIM';
        header('Location: home.php');
    } else {
        $_SESSION['autenticado'] = 'NAO';
        header('Location: index.php?login=erro');
    }



   
    
?>
<?php
    //EXISTEM MANEIRAS DIFERENTES DE LIDAR COM A REMOÇÃO DE VARIÁVEIS DE SESSÃO:

    /* 1 - Remover índices do array de sessão, um a um;
        1.1 - Utilizar a função unset() que recebe o array e o índice que
              será utilizado. Unset não é exclusiva para a superglobal 
              SESSION, ela pode ser usada para remover indices de qualquer array.


       2 - Destruir a variável de sessão, ou seja, todos ao mesmo tempo.
        2.2 - session_destroy() - Remove todos os índices da global SESSION
              session_destroy é especifica para superglobal SESSION.

    */


    session_start();

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    // unset($_SESSION['x']);

      
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    session_destroy();
    header('Location: index.php')



?>
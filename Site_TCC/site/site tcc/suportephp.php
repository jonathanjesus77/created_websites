<?php

    include_once "conectar.php";

    $Usernome = $_POST["usr_nome"];
    $Useremail = $_POST["usr_email"];
    $Usertel = $_POST["usr_telefone"];
    $Usercep = $_POST['usr_cep'];
    $msg = $_POST['usr_msg'];

    $juntar = "insert into sup values";
    $juntar .= "('$Usernome', '$Useremail', '$Usertel', '$Usercep','$msg' );";

    $resultado = mysqli_query($conn, $juntar);
        if ($resultado === FALSE)
            echo "Erro ao inserir sua mensagem ..." . mysqli_error($conn) . "<br />";
        
        else 
                echo mysqli_affected_rows ($conn) . " Sua mensagem foi enviada com sucesso. <br />";

    echo '<a href="index.html">Voltar</a>';

?>
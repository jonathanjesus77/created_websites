<?php

    include_once "conectar.php";

    $Usernome = $_POST["usr_nome"];
    $Userlogin = $_POST["usr_login"];
    $Usersenha = $_POST["usr_senha"];
    $Useremail = $_POST["usr_email"];

    $juntar = "insert into dados values";
    $juntar .= "('$Usernome', '$Userlogin', '$Usersenha', '$Useremail');";

    $resultado = mysqli_query($conn, $juntar);
        if ($resultado === FALSE)
            echo "Erro ao fazer o registro ..." . mysqli_error($conn) . "<br />";
        
        else 
                echo mysqli_affected_rows ($conn) . " Registro feito com sucesso. <br />";

    echo '<a href="index.html">Voltar</a>';

?>
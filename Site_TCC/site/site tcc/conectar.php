<?php

    $conn = mysqli_connect('localhost', 'root', 'usbw', 'jalls');
            if(!$conn){
                die('Erro na conexão (' . mysqli_errno() . ')'
                . mysqli_connect_error());
            }
?>
<?php
    
    $servername = "127.0.0.1";
    $username ="root";
    $password= "";
    $dbname="crudS";


$conn = new mysqli($servername, $username, $password, $dbname );


    if($conn -> connect_error){

        echo"erro de conexão"  .$conn->connect_error;

    }

    else{
        echo"";
    }
?>
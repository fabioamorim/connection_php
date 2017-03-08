<?php

    $dbname = 'db_usuario';// Banco de Dados
    $host = 'localhost';//Host
    $user = 'root';//Usuario
    $password = '';//Senha

    $conn = new mysqli($host,$user,$password,$dbname);
    $test_db = mysqli_select_db($conn,$dbname);//Testa banco selecionado

    //------------------------------------------------------------------------------------------------------------------------
    //Verificação de conexão e banco de dados selecionado
    
    if(!$conn){
        die("Não foi possível se conectar com o Banco de dados: ".mysqli_error()."<br>");
    }else{
        echo "Conexao realizada com sucesso!<br>";
    }

    if(!$test_db){
        die("Erro ao tentar se conectar com banco de dados: $dbname".mysqli_error()."<br>");
    }else{
        echo "Banco de dados selecionado: $dbname <br>";
    }
    //-------------------------------------------------------------------------------------------------------------------------
    
    //Select
    /*
    $query = "SELECT * FROM tbl_usuario";
    $result = $conn->query($query);

    while($user = mysqli_fetch_assoc($result)){
        echo $user['login']."<br>";
    }
    */

    //Insert
    /*
    $usuario = "teste@teste";
    $senha = "123";

    $query = "INSERT INTO tbl_usuario (login,senha) values ('$usuario','$senha')";
    $result = $conn->query($query);

    if(!$result){
        echo "Erro ao tentar inserir novo usuario!<br>";
    }else{
        echo "Usuario cadastrado com sucesso!<Br>";
    }
    */

    //Update
    /*
    $usuario = "teste03@teste03";

    $query = "UPDATE tbl_usuario SET login = '$usuario' WHERE id = 1";
    $result = $conn->query($query); 
    
    if(!$result){
        echo "Erro ao tentar alterar usuario!<br>";
    }else{
        echo "Usuario alterado com sucesso!<br>";
    }
    */

    //Delete
    /*
    $query = "DELETE FROM tbl_usuario WHERE id = 5";
    $result = $conn->query($query);

    if(!$result){
        echo "Erro ao tentar deletera usuario!<br>";
    }else{
        echo "Usuario deletado com sucesso!<br>";
    }
    */
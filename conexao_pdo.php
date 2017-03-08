<?php

    $dbname = 'db_usuario';// Banco de Dados
    $host = 'localhost';//Host
    $user = 'root';//Usuario
    $password = '';//Senha

    //Instanciando um Objeto PDO e passando pelo construtor as configurações do banco de dados
    $PDO = new PDO('mysql:host='.$host.';dbname='.$dbname,$user,$password) or print(mysql_error());
    
    print "Teste de conexao PDO, sucesso!<br>";

    //Select

    $query = "SELECT * FROM tbl_usuario";
    $result = $PDO->query($query);

    foreach($result->fetchAll() as $value){
        echo $value['login']."<br>";
    }

    //Insert
    /*
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $login = "fabio@hotmail.com";
    $senha = "123";

    $query = "INSERT INTO tbl_usuario (login,senha) VALUE (:login, :senha)";
    $stmt = $PDO->prepare($query);

    $stmt->bindParam(':login',$login);
    $stmt->bindParam(':senha',$senha);

    $result = $stmt->execute();

    if(!$result){
        var_dump($stmt->errorInfo());
        exit;
    }else{
        echo "<br>Usuario inserido com sucesso!<br>";
    }
    */

    //Update
    /*
    $query = "UPDATE tbl_usuario SET login = :login WHERE id = 1";

    $login = "novo@usuario";

    $stmt = $PDO->prepare($query);    
    $stmt->bindParam(':login',$login);

    $result = $stmt->execute();

    if(!$result){
        var_dump($stmt->errorInfo());
        exit;
    }else{
        echo "<br>Usuario alterado com sucesso!<br>";
    }
    */

    //Delete
    /*
    $query = "DELETE FROM tbl_usuario where id = 2";
    $stmt = $PDO->prepare($query);

    $result = $stmt->execute();

    if(!$result){
        var_dump($stmt->errorInfo());
        exit;
    }else{
        echo "<br>Usuario deletado com sucesso!<br>";
    }
    */
?>
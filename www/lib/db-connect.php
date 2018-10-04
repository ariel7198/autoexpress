<?php
    
    $_SG['server'] = '127.0.0.1';    // Servidor MySQL
    $_SG['user'] = 'root';         // Usuário MySQL
    $_SG['password'] = 'root';     // Senha MySQL
    $_SG['database'] = 'autoexpress';         // Banco de dados 
                
                
    /* Conexão com o banco */ 
    $_SG['link'] = mysqli_connect($_SG['server'], $_SG['user'], $_SG['password'], $_SG['database']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['server']."].");
                
    mysqli_select_db($_SG['link'], $_SG['database']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['databasesudo ']."].");

    echo ("Conectado");




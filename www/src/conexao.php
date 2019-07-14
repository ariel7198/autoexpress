<?php
    
    $_SG['servidor'] = '127.0.0.1';    // Servidor MySQL
    $_SG['usuario'] = 'root';         // Usuário MySQL
    $_SG['senha'] = '';     // Senha MySQL
    $_SG['banco'] = 'autoexpress';         // Banco de dados  
    $_SG['tabela'] = 'user';       // Nome da tabela onde os usuários são salvos
                
                
    /* Conexão com o banco */ 
    $_SG['link'] = mysqli_connect($_SG['servidor'], $_SG['usuario'], $_SG['senha'], $_SG['banco']) or die("MySQL: Não foi possível conectar-se ao servidor [".$_SG['servidor']."].");
                
    mysqli_select_db($_SG['link'], $_SG['banco']) or die("MySQL: Não foi possível conectar-se ao banco de dados [".$_SG['banco']."].");




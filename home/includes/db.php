<?php

    $db['db_host'] = "localhost";
    $db['db_root'] = "root";
    $db['db_pass'] = "";
    $db['db_name'] = "real_solutions";


    foreach($db as $key => $value){
        define(strtoupper($key), $value);
    }
    
    
    $connection = mysqli_connect(DB_HOST, DB_ROOT, DB_PASS, DB_NAME);

   






?>
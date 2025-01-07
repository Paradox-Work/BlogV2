<?php

class Database {

    public $pdo;

    public function __construct($config){
        //dataSourceName
        $dsn="mysql:" . http_build_query($config, "",";");
        //PHP data object
     $this->pdo=new PDO($dsn);
     $this->pdo->setAttribute(19,2);//PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC//
     
     }


//uzstadi metodi query
public function query($sql, $params){
    // Prepare the query
    $statement = $this->pdo->prepare($sql);
    // Execute the query with parameters
    $statement->execute($params);
    // Return the statement object
    return $statement;
}
}
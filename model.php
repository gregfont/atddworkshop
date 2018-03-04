<?php

abstract class Model
{
    private $table;

    // identifiant de connexion
    protected $pdo;

    public function __construct($table)
    {
        $this->table = $table;

        // constantes définies dans un fichier de configuration
        $this->pdo = new PDO('mysql:host=localhost;dbname=quotation', 'root', '');
    }
    
  public function query($sql)
  {
    $res = $this->pdo->query($sql);

    return $res;
  }

}

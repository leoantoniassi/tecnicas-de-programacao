<?php
    abstract class Conexao 
    {
       $parametro = "mysql:host=localhost;dbname=pets";

       public function __construct(pretected $db = null)
       {
            $this -> db = new PDO($parametro, "root", "");
       }
    }
?>
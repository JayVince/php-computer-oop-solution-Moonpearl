<?php

class SqlDbHandler
{
     /**
      * Identifiants
      * bloc-comments à définir
      * Importance de la déclaration en private ?? 
      */
     // private string $host;
     // private string $db_name;
     // private string $port;
     // private string $username;
     // private string $password;
     private  $conn;

     public function __construct(
          $host = "localhost",  // "mysql:host=localhost"   // "host=localhost"
          $db_name = "computer",
          $port = "8889",
          $username = "root",
          $password = "root",
     ) {

          $dsn = "mysql:host=$host;dbname=$db_name;port=$port;charset=utf8mb4";
          try {
               $this->conn = new PDO($dsn, $username, $password);
               // if ($this->conn) {
               //      echo "Vous etes connectés";
               // }

          } catch (PDOException $e) {
               echo "Connection Error -->> ", $e->getMessage();

               $this->conn = null;
          }
     }
}

// static public function findAll(): array
// {
//     // Configure la connexion à la base de données
//     $databaseHandler = new PDO("mysql:host=localhost;dbname=computer", 'root', 'root');
//     // Envoie une requête dans le serveur de base de données
//     $statement = $databaseHandler->query('SELECT * FROM `gpus`');
//     // Récupère tous les résultats de la requête
//     foreach ($statement->fetchAll() as $gpuData) {
//         $gpus []= new Gpu(
//             $gpuData['id'],
//             $gpuData['name'],
//             $gpuData['price'],
//             $gpuData['brand_id'],
//             $gpuData['ram']
//         );
//     }
//     return $gpus;
// }

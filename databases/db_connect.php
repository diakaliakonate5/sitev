<?php
class db_connect{
    public $pdo;
    public function __construct()
    {
        try{

            $this->pdo = new PDO("mysql:host=localhost;dbname=numeric_history", "root", "");
           
        }
        catch(PDOException $error)
        {
            echo "erreur de connexion: ".$error->getMessage();
        }
    }
    public function getPersonnage(){
        $req = $this->pdo->prepare("select * from personnages;");
        $req->execute();
        
        $resultat = $req->fetchAll();
        return $resultat;
    }



    public function getDetail($personnageId){
        $req = $this->pdo->prepare("SELECT * FROM personnages WHERE id =$personnageId ");
        $req->execute();
        $resultat = $req->fetch();
        return $resultat;
    }
}

$db = new db_connect();

?>
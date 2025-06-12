<?php


require_once __DIR__ . '/../config/db.php';

class Opera {


    
    public function __construct() {
        global $pdo;       
        $this->pdo = $pdo; 
    }


    
    public function tutti() {
        $sql = "SELECT id, titolo, paese FROM opere";     
        $risultato = $this->pdo->query($sql);             
        return $risultato->fetchAll();                    
    }


    
    public function trovaPerId($id) {
        $sql = "SELECT * FROM opere WHERE id = ?";              
        $query = $this->pdo->prepare($sql);                     
        $query->execute([$id]);                                 
        return $query->fetch();                                 
    }


    


   
    public function nuovo($titolo, $anno, $stato, $paese) {
        $sql = $this->pdo->prepare("INSERT INTO opere (titolo, anno, stato, paese) VALUES (?, ?, ?, ?)");
        return $sql->execute([$titolo, $anno, $stato, $paese]);
    }




    
    public function aggiorna($id, $dati) {
    $sql = "UPDATE opere SET titolo = ?, anno = ?, stato = ?, paese = ? WHERE id = ?";
    $query = $this->pdo->prepare($sql);
    $query->execute([
        $dati['titolo'],
        $dati['anno'],
        $dati['stato'],
        $dati['paese'],
        $id
    ]);
}



    

    public function cancellaId($id) {
        $sql = "DELETE FROM opere WHERE id = ?";          
        $query = $this->pdo->prepare($sql);                     
        $query->execute([$id]);                                 
                                      
    }




    
}

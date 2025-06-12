<?php
require_once __DIR__ . '/../model/Opera.php';

class OperaController {

   
    private $operaModel;

    
    public function __construct() {
        $this->operaModel = new Opera();  
    }

    
    public function lista() {
        
        $opere = $this->operaModel->tutti();
        require __DIR__ . '/../view/lista_opere.php';
    }



    
    public function dettaglio($id) {
        
        $opera = $this->operaModel->trovaPerId($id);

        require __DIR__ . '/../view/dettaglio_opera.php';



    }

    public function destItalia() {
        
        $opere = $this->operaModel->destItalia();
        
        require __DIR__ . '/../view/lista_opere.php';
    }


 public function loadForm() {
        
        require __DIR__ . "/../view/aggiungi_opera.php";
    }


    



public function store() {
        
        if (isset($_POST['titolo'], $_POST['anno'], $_POST['stato'], $_POST['paese'])) {
            $this->operaModel->nuovo($_POST['titolo'], $_POST['anno'], $_POST['stato'], $_POST['paese']);
        }
        header("Location: index.php");
    }    




public function modifica($id) {
    
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $dati = [
            'titolo' => $_POST['titolo'],
            'anno' => $_POST['anno'],
            'stato' => $_POST['stato'],
            'paese' => $_POST['paese']
        ];
        $this->operaModel->aggiorna($id, $dati);
        header("Location: index.php");
        exit;
    } 


    else {

        $opera = $this->operaModel->trovaPerId($id);
        require __DIR__ . '/../view/modifica_opera.php';
    }
}




public function elimina($id) {

$this->operaModel->cancellaId($id);
header("Location: index.php");

}



}

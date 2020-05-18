<?php


class PrincipalController {
     public function __construct() {
        $this->view = new View();
    } // constructor
    
     public function mostrar(){    
         $this->view->show("paginaprincipal.php", null);
     } // listar
     
}

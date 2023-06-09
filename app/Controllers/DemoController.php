<?php

namespace Com\Daw2\Controllers;

class DemoController extends \Com\Daw2\Core\BaseController {
    
    public function home() {
       $data = array(
            'titulo' => 'Home',
            'breadcrumb' => ['Home']
        );        
        $this->view->showViews(array('templates/header.view.php', 'Demo.view.php', 'templates/footer.view.php'), $data);
    }
    public function index() {
        $data = array(
            'titulo' => 'Página de inicio',
            'breadcrumb' => ['Inicio']
        );        
        $this->view->showViews(array('templates/header.view.php', 'inicio.view.php', 'templates/footer.view.php'), $data);
    }

}

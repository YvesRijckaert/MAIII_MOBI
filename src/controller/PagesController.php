<?php

require_once __DIR__ . '/Controller.php'; //haal de functionaliteit op van de Controller
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class PagesController extends Controller { //geef PagesController dezelfde macht als Controller

    private $eventDAO;

    function __construct() {
      $this->eventDAO = new EventDAO();
    }

    public function index() { //de index pagina
        if(!empty($_POST)) $this->handleNewsLetter(); //als er een POST is gebeurd, voer de functie handleNewsLetter uit
    }

    private function handleNewsLetter(){
      if($this->eventDAO->insert($_POST)) {
        $_SESSION['info'] = 'Danku om te registeren!';
        header('Location: index.php');
        exit();
      } else {
        $errors = $this->eventDAO->validateData($_POST);
        $_SESSION["error"] = $errors['email'];
        header('Location: index.php');
      }
  }
}

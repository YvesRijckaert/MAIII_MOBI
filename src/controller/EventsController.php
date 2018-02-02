<?php

require_once WWW_ROOT . 'controller' . DS . 'Controller.php';
require_once WWW_ROOT . 'dao' . DS . 'EventDAO.php';

class EventsController extends Controller {

  private $eventDAO;

  function __construct() {
    $this->eventDAO = new EventDAO();
  }

  public function events() {
    $tags = $this->eventDAO->getTags();
    $this->set('tags', $tags);
    $conditions = array();

    //search on city
    if(isset($_POST['city'])){
      $conditions[] = array(
        'field' => 'organiser',
        'comparator' => 'like',
        'value' => $_POST['city']
      );
    }

    //search on tag name
    if (isset($_POST['tag'])){
      $conditions[0] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_POST['tag']
      );
    }

    //search multi-day events
    if(isset($_POST['datum'])){
      if($_POST["datum"] == "zondag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-16 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-16 00:00:00'
        );
      }
      else if ($_POST["datum"] == "maandag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-17 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-17 00:00:00'
        );
      }
      else if ($_POST["datum"] == "dinsdag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-18 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-18 00:00:00'
        );
      }
      else if ($_POST["datum"] == "woensdag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-19 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-19 00:00:00'
        );
      }
      else if ($_POST["datum"] == "donderdag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-20 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-20 00:00:00'
        );
      }
      else if ($_POST["datum"] == "vrijdag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-21 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-21 00:00:00'
        );
      }
      else if ($_POST["datum"] == "zaterdag")
      {
        $conditions[] = array(
          'field' => 'start',
          'comparator' => '<=',
          'value' => '2018-09-22 23:59:59'
        );
        $conditions[] = array(
          'field' => 'end',
          'comparator' => '>=',
          'value' => '2018-09-22 00:00:00'
        );
      }
    }

    $events = $this->eventDAO->search($conditions);
    $this->set('events', $events);
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
      header('Content-Type: application/json');
      echo json_encode($events);
      exit();
    }
  }

  private function selectAll() {
  $events = $this->eventDAO->selectAll();
  return $events;
  }

  public function detail() {
    $event = $this->eventDAO->selectById($_GET['id']);
    $this->set('event', $event);
  }
}

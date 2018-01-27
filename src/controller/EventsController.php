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
    //example: search on title
    // $conditions[] = array(
    //   'field' => 'title',
    //   'comparator' => 'like',
    //   'value' => 'leie'
    // );

    //example: search on organiser_id
    // $conditions[] = array(
    //   'field' => 'organiser_id',
    //   'comparator' => '=',
    //   'value' => 8
    // );

    //example: search on organiser name
    // $conditions[] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'like',
    //   'value' => 'brussel'
    // );

    //example: search on tag name
    if (isset($_POST['tag'])){
      $conditions[0] = array(
        'field' => 'tag',
        'comparator' => '=',
        'value' => $_POST['tag']
      );
    }

    //example: 1-day events on september 17
    // $conditions[] = array(
    //   'field' => 'start',
    //   'comparator' => '>=',
    //   'value' => '2018-09-17 00:00:00'
    // );
    // $conditions[] = array(
    //   'field' => 'end',
    //   'comparator' => '<=',
    //   'value' => '2018-09-17 23:59:59'
    // );

    //example: events on sunday september 16 (includes multi-day events)
    if (isset($_POST['zondag'])){
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

    //example: events on monday september 17 (includes multi-day events)
    if (isset($_POST['maandag'])){
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

    //example: events on tuesday september 18 (includes multi-day events)
    if (isset($_POST['dinsdag'])){
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

    //example: events on wednesday september 19 (includes multi-day events)
    if (isset($_POST['woensdag'])){
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

    //example: events on thursday september 20 (includes multi-day events)
    if (isset($_POST['donderdag'])){
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

    //example: events on friday september 21 (includes multi-day events)
    if (isset($_POST['vrijdag'])){
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

    //example: events on saturday september 22 (includes multi-day events)
    if (isset($_POST['zaterdag'])){
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

    //example: search on organiser, with certain end date + time
    // $conditions[] = array(
    //   'field' => 'organiser',
    //   'comparator' => 'like',
    //   'value' => 'brussel'
    // );
    // $conditions[] = array(
    //   'field' => 'end',
    //   'comparator' => '=',
    //   'value' => '2018-09-16 18:00:00'
    // );

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
    $events = $this->eventDAO->selectById($_GET['id']);
    $this->set('events', $events);
  }
}

<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlayerDAO.php';

class PlayersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {


    $this->set('players', $players);
    $this->set('title', "Home");

    // $this->set('countries', $this->playerDAO->selectAllCountries());
    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($players);
      exit();
    }
  }

  public function programma() {
    $playerDAO = new PlayerDAO();
    if (!empty($_GET['page']) && $_GET['page'] == 'programma') {
      $search = $_GET['search'];
      $day = $_GET['dag'];
      $programmas = $this->playerDAO->search($search, $day);

      // $this->set('nationality',$_GET['nationality']);
    }else{
      $programmas = $this->playerDAO->search();
      $this->set('name','');
    }
    // $programmas = $playerDAO->test();
    $this->set('programmas', $programmas);
    $this->set('title', "Programma");
  }
  public function detail() {

    $playerDAO = new PlayerDAO();
    if (!empty($_GET['id'])) {
      $programma = $playerDAO->selectById($_GET['id']);
    }
    $this->set('programma', $programma);
    $this->set('title', "Detail");
  }

/*
  private function handleSearchPlayer() {

    if (!$searchPlayersResult) {
      $errors = "No players found";
      $this->set('errors', $errors);
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'error',
          'errors' => $errors
        ));
        exit();
      }else{
        return $errors;
      }
      $_SESSION['error'] = $errors;
    } else {
      if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {
        header('Content-Type: application/json');
        echo json_encode(array(
          'result' => 'ok',
          'todo' => $searchPlayersResult
        ));
        exit();
      }else{
        return searchPlayersResult;
      }
      $_SESSION['info'] = count($searchPlayersResult). " players found";
      header('Location: index.php');
      exit();
    }
  }*/

}

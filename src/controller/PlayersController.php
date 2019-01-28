<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PlayerDAO.php';

class PlayersController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->playerDAO = new PlayerDAO();
  }

  public function index() {

    $playerDAO = new PlayerDAO();

      $acts = $playerDAO->uitgelicht();

      $this->set('acts', $acts);

      $this->set('title', "Home");

  }

  public function programma() {
    $playerDAO = new PlayerDAO();
    if (!empty($_GET['page']) && $_GET['page'] == 'programma') {
      $search = '';
      if(!empty($_GET['search'])){
        $search = $_GET['search'];
      }
      $dag = '';
      if(!empty($_GET['dag'])){
        $dag = $_GET['dag'];
      }
      $genre = '';
      if(!empty($_GET['genre'])){
        $genre = $_GET['genre'];
      }
      $locatie = '';
      if(!empty($_GET['locatie'])){
        $locatie = $_GET['locatie'];
      }

      $programmas = $this->playerDAO->search($search, $dag, $genre, $locatie);

    }else{
      $programmas = $this->playerDAO->search();
      $this->set('name','');
    }

    if (strtolower($_SERVER['HTTP_ACCEPT']) == 'application/json') {

      header('Content-Type: application/json');
      echo json_encode($programmas);
      exit();
    }

    $this->set('programmas', $programmas);
    $this->set('title', "Programma");
  }

  public function detail() {

    $playerDAO = new PlayerDAO();
    if (!empty($_GET['id'])) {
      $programmas = $playerDAO->selectById($_GET['id']);
    }

    $randomActs = $playerDAO->randomActs();

    $this->set('programmas', $programmas);
    $this->set('randomActs', $randomActs);
    $this->set('title', "Detail");
  }

}

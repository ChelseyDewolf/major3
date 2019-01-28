<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ShowDAO.php';

class ShowsController extends Controller {

  private $todoDAO;

  function __construct() {
    $this->showDAO = new ShowDAO();
  }

  public function index() {

    $showDAO = new ShowDAO();

      $acts = $showDAO->uitgelicht();

      $this->set('acts', $acts);

      $this->set('title', "Home");

  }

  public function programma() {
    $showDAO = new ShowDAO();
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

      $programmas = $this->showDAO->search($search, $dag, $genre, $locatie);

    }else{
      $programmas = $this->showDAO->search();
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

    $showDAO = new ShowDAO();
    if (!empty($_GET['id'])) {
      $programmas = $showDAO->selectById($_GET['id']);
    }

    $randomActs = $showDAO->randomActs();

    $this->set('programmas', $programmas);
    $this->set('randomActs', $randomActs);
    $this->set('title', "Detail");
  }

}

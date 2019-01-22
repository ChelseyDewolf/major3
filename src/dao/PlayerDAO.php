<?php

require_once( __DIR__ . '/DAO.php');

class PlayerDAO extends DAO {

  public function search($max=10, $name = ''){
    $sql = "SELECT * FROM `shows` WHERE 1";

    if (!empty($name)) {
      $sql .= " AND `show_name` LIKE :name";
    }
    // if (!empty($nationality)) {
    //   $sql .= " AND `Nationality` = :nationality";
    // }

    $sql .= " ORDER BY `show_name` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }
    // if (!empty($nationality)) {
    //   $stmt->bindValue(':nationality', $nationality);
    // }
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // public function selectAllCountries() {
  //   $sql = "SELECT DISTINCT `Nationality` FROM `players` ORDER BY `Nationality` ASC";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function selectById($id){
    $sql = "SELECT * FROM `shows` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }


}

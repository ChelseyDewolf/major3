<?php

require_once( __DIR__ . '/DAO.php');

class PlayerDAO extends DAO {

  public function search($name = '', $day = '', $genre = ''){
    $sql = "SELECT shows.id, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id`  WHERE 1";

    if (!empty($name)) {
      $sql .= " AND `show_name` LIKE :name";
    }

    if (!empty($day)) {
      $sql .= " AND `date` LIKE :day";
    }

    if (!empty($genre)) {
      $sql .= " AND `genre` LIKE :genre";
    }

    $sql .= " ORDER BY `show_name` DESC";

    $stmt = $this->pdo->prepare($sql);
    if (!empty($name)) {
      $stmt->bindValue(':name','%'.$name.'%');
    }

    if (!empty($day)) {
      $stmt->bindValue(':day','%'.$day.'%');
    }

    if (!empty($genre)) {
      $stmt->bindValue(':genre','%'.$genre.'%');
    }
    // if (!empty($nationality)) {
    //   $stmt->bindValue(':nationality', $nationality);
    // }
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

  // public function selectAllActs($limit = 100){
  //   $sql = "SELECT * FROM `shows` LIMIT :limit";
  //   $stmt = $this->pdo->prepare($sql);
  //   $stmt->bindValue(':limit', $limit);
  //   $stmt->execute();
  //   return $stmt->fetchAll(PDO::FETCH_ASSOC);
  // }

  public function test($limit = 100){
    $sql = "SELECT shows.id, shows.show_name, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id` LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}

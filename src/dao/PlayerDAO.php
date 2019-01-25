<?php

require_once( __DIR__ . '/DAO.php');

class PlayerDAO extends DAO {

  public function search($name = '', $day = '', $genre = [], $locatie = []){
    $sql = "SELECT shows.id, shows.show_name, shows.info, shows.genre, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour, program.location_id FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id`  WHERE 1";
    if (!empty($name)) {
      $sql .= " AND `show_name` LIKE :name";
    }

    if (!empty($day)) {
      $sql .= " AND `date` LIKE :day";
    }

    if (!empty($genre) && is_array($genre))  {


      // `genre` IN ('Voorstelling', 'Straatact')
      // AND `genre` IN (:genre0, :genre1, :genre2)
      $inSql = '';
      foreach ($genre as $index => $genreEnkel) {
        if ($index > 0) {
          $inSql .= ", ";
        }
        $inSql .= ":genre" . $index;
      }

      $sql .= " AND `genre` IN (" . $inSql . ")";
      // foreach ($genre as $genreEnkel) {
        // $sql .= " AND `genre` LIKE :genre0 OR `genre` LIKE :genre01 `genre` LIKE :genre02";
      // }
      // $sql .= " )";
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
      foreach ($genre as $index => $genreEnkel) {
        $stmt->bindValue(":genre" . $index, $genreEnkel);
      }
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
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, program.date as dag, program.start as hour, program.location_id, artists.site, locations.location_name
    FROM `shows`
    INNER JOIN `program`
    ON `shows`.`id` = `program`.`show_id`
    INNER JOIN `locations`
    ON `program`.`location_id` = `locations`.`id`
    INNER JOIN `artists`
    ON `shows`.`artist_id` = `artists`.`id`
    WHERE shows.id = :id";
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

  public function uitgelicht($limit = 6){
    $sql = "SELECT shows.id, shows.show_name, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id` ORDER BY RAND() LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}

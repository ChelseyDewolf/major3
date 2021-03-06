<?php

require_once( __DIR__ . '/DAO.php');

class ShowDAO extends DAO {

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

    if (!empty($locatie) && is_array($locatie))  {


      // `genre` IN ('Voorstelling', 'Straatact')
      // AND `genre` IN (:genre0, :genre1, :genre2)
      $inSqlTwee = '';
      foreach ($locatie as $index => $locatieEnkel) {
        if ($index > 0) {
          $inSqlTwee .= ", ";
        }
        $inSqlTwee .= ":locatie" . $index;
      }

      $sql .= " AND `location_id` IN (" . $inSqlTwee . ")";
      // foreach ($genre as $genreEnkel) {
        // $sql .= " AND `genre` LIKE :genre0 OR `genre` LIKE :genre01 `genre` LIKE :genre02";
      // }
      // $sql .= " )";
    }




    $sql .= " ORDER BY `show_name` ASC";

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

    if (!empty($locatie)) {
      foreach ($locatie as $index => $locatieEnkel) {
        $stmt->bindValue(":locatie" . $index, $locatieEnkel);
      }
    }

    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function selectById($id){
    $sql = "SELECT shows.id as showid, shows.show_name, shows.genre, program.id as programid, shows.info, shows.pic, shows.extra_pic_een, shows.extra_pic_twee, shows.extra_pic_drie, shows.extra_info, program.date as dag, program.start as hour, program.location_id, artists.site, locations.location_name
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


  public function uitgelicht($limit = 6){
    $sql = "SELECT shows.id, shows.show_name, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id` ORDER BY RAND() LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function randomActs($limit = 3){
    $sql = "SELECT shows.id, shows.show_name, program.id as programid, shows.info, shows.pic, program.date as date, program.start as hour FROM `shows` INNER JOIN `program` ON `shows`.`id` = `program`.`show_id` ORDER BY RAND() LIMIT :limit";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':limit', $limit);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }



}

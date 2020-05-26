<?php
/**
 *
 */
class teamClass {
  private static $conn;

  function __construct() {
    self::$conn = Database::getInstance()->getConnection();
  }

  function createTeam() {
    if (isset($_POST['create_team'])) {
      $team      = CustomFunctions::Post("teamname");
      $year      = CustomFunctions::Post("date");
      $captain   = CustomFunctions::Post("captain");
      $neet      = CustomFunctions::Post("neet");
      $tactic      = CustomFunctions::Post("tactic");

      if (empty($team) || empty($year) || empty($captain) || empty($neet) || empty($tactic)) {
        echo "<script>
          PNotify.error({
          title: 'Hata!',
          delay: 3000,
          text: 'Lütfen boş alan bırakmayın!'
          });</script>";
      } else {
        $query        = self::$conn->prepare("INSERT INTO team SET
          teamname    = ?,
          date        = ?,
          captain     = ?,
          neet        = ?,
		  tactic	  = ?
          ");
          $insert = $query->execute(array($team, $year, $captain, $neet, $tactic));
            if ($insert){
                $last_id = self::$conn->lastInsertId();
                echo "<script>
                  PNotify.success({
                  title: 'Başarılı!',
                  delay: 3000,
                  text: '$team İsimli takım başarıyla eklendi!'
                  });</script>";
        }
      }
    }
  }

  function getTeam() {
    $query = self::$conn->query("SELECT * FROM team", PDO::FETCH_ASSOC);
    if ($query->rowCount()){
         return $query;
    } else {
        return $data = false;
    }
  }
}

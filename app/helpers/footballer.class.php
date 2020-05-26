<?php
/**
 *
 */

class FootballlerClass {
  private static $conn;

  function __construct() {
    self::$conn = Database::getInstance()->getConnection();
  }

  function CreateFootballer() {
    if (isset($_POST['create_footballer'])) {
      $located      = json_encode($_POST['located']);
      $namesurname  = CustomFunctions::Post("namesurname");
      $nationality  = CustomFunctions::Post("nationality");
      $age          = CustomFunctions::Post("age");
      $country      = CustomFunctions::Post("country");
      $team         = CustomFunctions::Post("team");
      $disease      = CustomFunctions::Post("disease");
      $neet         = CustomFunctions::Post("neet");
	  $skill		= CustomFunctions::Post("skill");      
	  $skill2		= CustomFunctions::Post("skill2");      
	  $skill3		= CustomFunctions::Post("skill3");      

      if (empty($namesurname) || empty($age) || empty($country) || empty($nationality) || empty($team) || empty($skill) || empty($disease) || empty($neet) || !is_array(CustomFunctions::json_validate($located)) || $team == "not_selected_team" ) {
        echo "<script>
          PNotify.error({
          title: 'Hata!',
          delay: 3000,
          text: 'Lütfen boş alan bırakmayın!'
          });</script>";
      } else {
        $query        = self::$conn->prepare("INSERT INTO footballers SET
          located = ?,
          namesurname = ?,
          age         = ?,
          country     = ?,
          nationality = ?,
          team        = ?,
          disease     = ?,
          neet        = ?,
	      skill		    = ?,
	      skill2		    = ?,
	      skill3		    = ?
          ");
          $insert = $query->execute(array(
               $located, $namesurname, $age, $country, $nationality, $team, $disease, $neet, $skill, $skill2, $skill3
          ));
            if ($insert){
                $last_id = self::$conn->lastInsertId();
                echo "<script>
                  PNotify.success({
                  title: 'Başarılı!',
                  delay: 3000,
                  text: '$namesurname İsimli futbolcu başarıyla eklendi!'
                  });</script>";
        }
      }
    }
  }

  function getFootballers() {
    $query = self::$conn->query("SELECT * FROM footballers ORDER BY located ASC", PDO::FETCH_ASSOC);
    if ($query->rowCount()){
         return $query;
    } else {
        return $data = false;
    }
  }
}

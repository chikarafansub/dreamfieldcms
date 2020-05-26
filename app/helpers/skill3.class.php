<?php
/**
 *
 */
class skill3Class {
  private static $conn;

  function __construct() {
    self::$conn = Database::getInstance()->getConnection();
  }

  function createskill3() {
    if (isset($_POST['create_skill3'])) {
      $name      = CustomFunctions::Post("name");
      $hp      = CustomFunctions::Post("hp");
      $mp   = CustomFunctions::Post("mp");
      	  
      if (empty($name) || empty($hp) || empty($mp)) {
        echo "<script>
          PNotify.error({
          title: 'Hata!',
          delay: 3000,
          text: 'Lütfen boş alan bırakmayın!'
          });</script>";
      } else {
        $query        = self::$conn->prepare("INSERT INTO skill3 SET
          name    = ?,
          hp        = ?,
          mp        = ?
          ");
          $insert = $query->execute(array(
            $name, $hp, $mp
          ));
            if ($insert){
                $last_id = self::$conn->lastInsertId();
                echo "<script>
                  PNotify.success({
                  title: 'Başarılı!',
                  delay: 3000,
                  text: '$name İsimli takım başarıyla eklendi!'
                  });</script>";
        }
      }
    }
  }

  function getskill3() {
    $query = self::$conn->query("SELECT * FROM skill3 ORDER BY name ASC", PDO::FETCH_ASSOC);
    if ($query->rowCount()){
         return $query;
    } else {
        return $data = false;
    }
  }
}

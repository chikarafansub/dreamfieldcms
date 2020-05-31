<?php
/**
 *
 */
class Pages {

  function Index() {
      global $conn;

      Define("File_Path","/index?url=");
      $file_name = ltrim($_SERVER['REQUEST_URI'],File_Path);

        if (File_Path) {
        $birlestir = File_Path.$file_name;
        if ($_SERVER['REQUEST_URI'] == "/" || $_SERVER['REQUEST_URI'] == "/index") {
        }elseif ($birlestir == File_Path."CreateFootballer") {
          include PDIR."/create_footballer.php";
        }elseif ($birlestir == File_Path."ViewFootballer") {
          include PDIR."/view_footballer.php";
        }elseif ($birlestir == File_Path."Createteam") {
          include PDIR."/create_team.php";
          }elseif ($birlestir == File_Path."Createskill") {
          include PDIR."/create_skill.php";
		}elseif ($birlestir == File_Path."Createskill2") {
          include PDIR."/create_skill2.php";
        }elseif ($birlestir == File_Path."Createskill3") {
          include PDIR."/create_skill3.php";
        }elseif ($birlestir == File_Path."Viewteam") {
          include PDIR."/view_team.php";
		}elseif ($birlestir == File_Path."whatsnew") {
          include PRDIR."/whatsnew.php";
		  		}elseif ($birlestir == File_Path."dictionary") {
          include PRDIR."/dictionary.php";

 		}else{
          include VDIR.'/404_err.php';
		
      }
    }
  }
}

        require CORE_DIR.'/database.class.php';
        require HDIR.'/customFunctions.class.php';
        require HDIR.'/footballer.class.php';
        require HDIR.'/team.class.php';
        require HDIR.'/skill.class.php';
        require HDIR.'/skill2.class.php';
        require HDIR.'/skill3.class.php';

        new Database();
        new CustomFunctions();
        new FootballlerClass();
	     	new teamclass();
	     	new skillclass();
        new Pages();
        new teamClass();
        new skillClass();
			new skill2Class();
			new skill3Class();


        $conn = Database::getInstance()->getConnection();
        $result = FootballlerClass::CreateFootballer();
        $result = teamClass::createTeam();
        $result = skillClass::createskill();
        $result = skill2Class::createskill2();
        $result = skill3Class::createskill3();
         	Pages::Index();

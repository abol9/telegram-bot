<?php
$dbhost = "";
$dbname = "";
$dbuser = "";
$dbpass = "";

/**
 *
 */
class User
{
  public $name;
  public $age;
  public $location;
  public $pic;
  function __construct($name,$chat_id,$age,$location,$pic)
  {
    $this->name = $name;
    $this->$chat_id = $chat_id;
    $this->age = $age;
    $this->location = $location;
    $this->pic = $pic;
  }
}
  function tableExists($dbh, $id)
  {
      $results = $dbh->query("SHOW TABLES LIKE '$id'");
      if(!$results) {
          return false;
      }
      if($results->rowCount()>0){return true;}
  }


try{
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbuser,$dbpass);
$pdo->exec("set names utf8");
if(tableExists($pdo,"Users")){
  $sql = "CREATE TABLE Users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    Name VARCHAR(30) NOT NULL,
    chat_id VARCHAR(30) NOT NULL,
    age VARCHAR(2),
    x_location float,
    y_location float,
    pic_url VARCHAR(80) 
    )";
  $pdo->exec($sql);
  echo "Table MyGuests created successfully";
}
else {
  echo "Table is Exist!!!";
}
}
catch(PDOException $e){
    echo $e->getMessage();
}



?>

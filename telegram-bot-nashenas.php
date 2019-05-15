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


try{
$pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbuser,$dbpass);
$pdo->exec("set names utf8");
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>

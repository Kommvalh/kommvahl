<?php

class Db{

  private $host = "localhost";
  private $user = "root";
  private $pass = "";//Om du kör i windowsmiljö och Wamp så tar ni bort Root.
  private $db = "acme";

  function Db(){//Skapar en funktion som upprättar en databasuppkoppling.
    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db) or die('something is wonky with the db');
    $this->mysqli->query("SET NAMES 'utf8'");
  }

  //Här använder vi oss av funktionen DB uppkopplingen.
  public function getDataFromQuery($query){//När vi skriver en fråga i pages så skickar vi in den via inparametern Query.
    $result = $this->mysqli->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
      if($row['id']){
        $data[$row['id']] = $row;
      }else{
        $data[] = $row;
      }
    }
    return $data;
  }

}
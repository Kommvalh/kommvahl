<?php

class Db{

  private $host = "localhost";
  private $user = "root";
  private $pass = "";//Om du k�r i windowsmilj� och Wamp s� tar ni bort Root.
  private $db = "acme";

  function Db(){//Skapar en funktion som uppr�ttar en databasuppkoppling.
    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db) or die('something is wonky with the db');
    $this->mysqli->query("SET NAMES 'utf8'");
  }

  //H�r anv�nder vi oss av funktionen DB uppkopplingen.
  public function getDataFromQuery($query){//N�r vi skriver en fr�ga i pages s� skickar vi in den via inparametern Query.
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
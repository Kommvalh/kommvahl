<?php

class Db{

  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db = "acme";

  function Db(){
    $this->mysqli = new mysqli($this->host, $this->user, $this->pass, $this->db) or die('something is wonky with the db');
    $this->mysqli->query("SET NAMES 'utf8'");
  }

  public function getDataFromQuery($query){
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

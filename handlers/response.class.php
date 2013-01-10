<?php

class Response{

  public $response = array();

  public function addToResponse($id, $elementName, $elementContent){

    if(isset($this->response[$id]) && $this->response[$id]){

      if(isset($this->response[$id][$elementName]) && $this->response[$id][$elementName]){
        $this->response[$id][$elementName] += $elementContent;

      }else{
        $this->response[$id][$elementName] = $elementContent;
      }

    }else{
      $this->response[$id][$elementName] = $elementContent;
    }
  }

  // Denna (eller liknande) funktion bör lämpligen leva i en Template-klass eller i Reponse-klassen.
  function templateApply($response, $type){
    header('Content-type: text/html; charset = UTF-8');
    extract($response);

    $images = array();
    $myCounter = 0;
    foreach($img as $src){
      $images[$myCounter] = $src;
      $myCounter++;
    }
    
    require('templates/' . strtolower($type) . '.page.tpl.php'); 
  }


}
<?php

class Response{

  public $response = array();
  public $type;

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

  public function respond(){
    header('Content-type: text/html; charset = UTF-8');

  // Denna (eller liknande) funktion bör lämpligen leva i en Template-klass eller i Reponse-klassen.
  function templateApply($response, $type){
    extract($response);
    require('templates/' . strtolower($type) . '.page.tpl.php');
  }

  // temporary header (borde leva i Template-klass eller Response-klassen)
  header('Content-type: text/html; charset = UTF-8');

  // respondWithHtmlTemplate
//templateApply($response->response[$id], $myPage->type);
  print_r($this->response);
  }


}
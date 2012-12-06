<?php

class Response{

  public $response = array();
  public $type;

  public function addToResponse($id, $elementName, $elementContent){

    if($this->response[$id]){

      if($this->response[$id][$elementName]){
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
    print_r($this->response);
  }



}
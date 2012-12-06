<?php

class Page{
    
  protected $data;

  function Page(&$response, &$db){  
    $this->response =& $response;
    $this->db =& $db;
  }

  //Hämtar data från DB. 
  public function getTheData($id){
    // get the data
    $this->data = $this->db->getDataFromQuery("SELECT * FROM pages");//Här hämtar vi Allt som ligger i tabellen "Pages".
    // make the responses
    $this->getTitle($id);
    $this->getContent($id);
    $this->getImages($id);
  }


  //Nedanstående hämtar objekt. (Bättre förklaring kommer:-)).
  function getTitle($id){
    // hämta data 
    $title = $this->data[$id]['title'];
    $this->response->addToResponse($id, 'title', $title);
  }

  function getContent($id){
    // hämta data 
    $content = $this->data[$id]['content'];
    $this->response->addToResponse($id, 'content', $content);
  }
  function getImages($id){
    // hämta data 
    $images = $this->data[$id]['src'];
    $this->response->addToResponse($id, 'src', $images);
  }
  


}
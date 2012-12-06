<?php

class Page{
    
  protected $data;

  function Page(&$response, &$db){  
    $this->response =& $response;
    $this->db =& $db;
  }

  public function getTheContent($id){
    // get the data
    $this->data = $this->db->getDataFromQuery("SELECT * FROM pages");
    // make the responses
    $this->getTitle($id);
    $this->getContent($id);
  }

  function getTitle($id){
    // hämta data 
    //$data = array('om_oss' => 'Om oss', 'kontakt' => 'Kontakta oss');
    $title = $this->data[$id]['title'];
    $this->response->addToResponse($id, 'title', $title);
  }

  function getContent($id){
    // hämta data 
    //$data = array('om_oss' => 'Vi är världens bästa folieleverantör', 'kontakt' => 'Men vi svarar inte i telefon');
    $content = $this->data[$id]['content'];
    $this->response->addToResponse($id, 'content', $content);
  }
  


}
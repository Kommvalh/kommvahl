<?php

class Page{
    
  protected $data;
  public $type;

  function Page(&$response, &$db){  
    $this->response =& $response;//&-tecknet gör så att response fungerar uppåt.
    $this->db =& $db;
  }

  //Hämtar data från DB. 
  public function getTheData($id){
    // get the data

    // get everything from the table "pages"
    $this->data = $this->db->getDataFromQuery("SELECT * FROM pages");
    // make the responses
    $this->getTitle($id);
    $this->getContent($id);
    $this->getType($id);
    $this->getImages($id);
  }
  //Nedanstående hämtar objekt. (Bättre förklaring kommer:-)).
  function getTitle($id){
    // get the title 
    $title = $this->data[$id]['title'];
    // add to response-array
    $this->response->addToResponse($id, 'title', $title);
  }

  function getContent($id){
    // get the content
    $content = $this->data[$id]['content'];
    // add to response-array
    $this->response->addToResponse($id, 'content', $content);
  }

  function getType($id){
    // get the content
    $type = $this->data[$id]['type'];
    // add to response-array
    $this->response->addToResponse($id, 'type', $type);
  }

  function getImages($id){
    // get the images
    // create a local variable called "images" and select src from DB
    $images = $this->db->getDataFromQuery("SELECT i.src FROM pages p INNER JOIN pagesximages pxi ON p.id = pxi.pageId INNER JOIN images i ON i.imgId = pxi.imgId WHERE p.id = '$id'");
    // add to response-array
    $this->response->addToResponse($id, 'img', $images);
  }

}
<?php
function resolvePathToId(){
  $siteRootDir = 'kommvahl/';
  $path = $_SERVER['REQUEST_URI'];
  $path = end(explode($siteRootDir, $path));
  $path = trim($path,'/');
  $tokens = explode('/', $path);
  return $tokens;
}

$tokens = resolvePathToId();
$id = $tokens[0];

include('handlers/response.class.php');
include('db/Db.class.php');
include('pages/page.class.php');
include('sitemap.class.php');

$response = new Response();
$response->type = 'html';

$db = new Db();

$myPage = new Page($response, $db);

$myPage->getTheData($id);

$response->respond();
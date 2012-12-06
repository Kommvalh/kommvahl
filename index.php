<?php
function resolvePathToId(){
  $siteRootDir = 'acme/Kommvalh/';
  $path = $_SERVER['REQUEST_URI'];
  $path = end(explode($siteRootDir, $path));
  $path = trim($path,'/');
  $tokens = explode('/', $path);
  return $tokens;
}

$tokens = resolvePathToId();
$id = $tokens[0];

include('handlers/Response.class.php');
include('db/Db.class.php');
include('pages/Page.class.php');

$response = new Response();
$response->type = 'html';

$db = new Db();

$myPage = new Page($response, $db);

$myPage->getTheContent($id);

$response->respond();
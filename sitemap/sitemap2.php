<?php
  $employees = array();
  $employees [] = array(
  'loc' => 'Albert',
  'lastmod' => '34',
  'changefreq' => "$10000",
  'priority' => "1"
  );
  $employees [] = array(
  'loc' => 'Claud',
  'lastmod' => '20',
  'changefreq' => "$2000",
  'priority' => "0.5"

  );
  
  $doc = new DOMDocument('1.0', 'UTF-8');
  $doc->formatOutput = true;
  
  $urlset = $doc->createElement( "urlset" );
  $doc->appendChild( $urlset );

  $xmlns = $doc->createAttribute("xmlns");
  $urlset->appendChild($xmlns);

  $xmlns_value = $doc->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9");
  $xmlns->appendChild($xmlns_value);

  
  foreach( $employees as $employee )
  {
  $url = $doc->createElement( "url" );
  
  $loc = $doc->createElement( "loc" );
  $loc->appendChild(
  $doc->createTextNode( $employee['loc'] )
  );
  $url->appendChild( $loc );
  
  $lastmod = $doc->createElement( "lastmod" );
  $lastmod->appendChild(
  $doc->createTextNode( $employee['lastmod'] )
  );
  $url->appendChild( $lastmod );
  
  $changefreq = $doc->createElement( "changefreq" );
  $changefreq->appendChild(
  $doc->createTextNode( $employee['changefreq'] )
  );
  $url->appendChild( $changefreq );
  
  $priority = $doc->createElement( "priority" );
  $priority->appendChild(
  $doc->createTextNode( $employee['priority'] )
  );
  $url->appendChild( $priority );

  $urlset->appendChild( $url );
  }
  
   echo $doc->saveXML();
  $doc->save("sitemap2.xml")
  ?>
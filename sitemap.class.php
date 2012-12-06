<?php
    

  $doc = new DOMDocument('1.0', 'UTF-8');
  $doc->formatOutput = true;
  
  $urlset = $doc->createElement( "urlset" );
  $doc->appendChild( $urlset );

  $xmlns = $doc->createAttribute("xmlns");
  $urlset->appendChild($xmlns);

  $xmlns_value = $doc->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9");
  $xmlns->appendChild($xmlns_value);


  // ändra databaskoppling enligt oop-praxis
  $dbConn = mysqli_connect('localhost', 'root', '', 'acme');
    if (mysqli_connect_errno())
      {echo "Det blev fel. Felkod:".mysqli_connect_errno();
      exit ;}
  $sqlSitemap = "SELECT * FROM sitemap";
  $resSitemap = mysqli_query($dbConn, $sqlSitemap);
  while ($rowSitemap = mysqli_fetch_assoc($resSitemap))
 {
    $locContent = $rowSitemap['loc'];
    $lastmodContent = $rowSitemap['lastmod'];
    $changefreqContent = $rowSitemap['changefreq'];
    $priorityContent = $rowSitemap['priority'];

  $url = $doc->createElement( "url" );
  
  $loc = $doc->createElement( "loc" );
  $loc->appendChild(
  $doc->createTextNode( $locContent )
  );
  $url->appendChild( $loc );
  
  $lastmod = $doc->createElement( "lastmod" );
  $lastmod->appendChild(
  $doc->createTextNode( $lastmodContent )
  );
  $url->appendChild( $lastmod );
  
  $changefreq = $doc->createElement( "changefreq" );
  $changefreq->appendChild(
  $doc->createTextNode( $changefreqContent )
  );
  $url->appendChild( $changefreq );
  
  $priority = $doc->createElement( "priority" );
  $priority->appendChild(
  $doc->createTextNode( $priorityContent )
  );
  $url->appendChild( $priority );

  $urlset->appendChild( $url );
  }
  
    echo $doc->saveXML();
  $doc->save("sitemap.xml")
  ?>
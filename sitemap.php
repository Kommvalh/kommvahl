<?php
  $doc = new DOMDocument('1.0', 'UTF-8');
  $doc->formatOutput = true;
  
  $urlset = $doc->createElement( "urlset" );
  $doc->appendChild( $urlset );

  $xmlns = $doc->createAttribute("xmlns");
  $urlset->appendChild($xmlns);

  $xmlns_value = $doc->createTextNode("http://www.sitemaps.org/schemas/sitemap/0.9");
  $xmlns->appendChild($xmlns_value);



  $dbConn = mysqli_connect('localhost', 'root', '', 'sitemapDB');
    if (mysqli_connect_errno())
      {echo "Det blev fel. Felkod:".mysqli_connect_errno();
      exit ;}
  $sql = "SELECT * FROM sitemap";
  $res = mysqli_query($dbConn, $sql);
  $row = mysqli_fetch_assoc($res);
  while ($row = mysqli_fetch_assoc($res))
 {
    $locContent = $row['loc'];
    $lastmodContent = $row['lastmod'];
    $changefreqContent = $row['changefreq'];
    $priorityContent = $row['priority'];

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
  $doc->save("sitemap2.xml")
  ?>
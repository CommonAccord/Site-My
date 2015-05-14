<?php
$document = `perl parser-missingfields.pl $path/$dir`;

$minDocLength = 105;

if (strlen($document) > $minDocLength){  
  echo $document;}
 else {
   echo "Nothing to Show";

}
?>

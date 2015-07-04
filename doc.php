<body style="margin:40;padding:0">
<?php

echo "<a href=index.php?action=source&file=" .$dir.">Source</a> &emsp; ";

echo "<a href=index.php?action=openedit&file=" .$dir.">Fill in blanks</a> &emsp; ";

echo "<a href=index.php?action=print&file=" .$dir.">Print</a><br><br>";

$document = `perl parser-print.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<font color='red'>{",$document);

$document=str_replace("}","}</font>",$document);

//kludge to let html headers have formatting.

$document=str_replace("(Curly-)","{",$document);

$document=str_replace("(-Curly)","}",$document);
 
  echo $document;}
 else {
   echo "Rien à voir - soit pas de 'Model.Root', soit un lien n'existe pas";


}
?>

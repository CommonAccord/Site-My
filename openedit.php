<?php
/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

$document = `perl openedit-parser.pl $path/$dir`;

?>

<div class="container">
<?php

//This displays the path, current file name, and provides the edit and show options //



echo "<a href=index.php?action=source&file=" .$dir.">Source</a> &emsp; ";

?>

<?php
  echo "
<div id='tabs'><ul>
<li><a href='#tab-edit'>éditer</a></li>
</ul><div id='tab-render'>" ;
?>
</div>



<div id="tab-source">

<!--table formatting for the document -->

</div>

<div id="tab-edit">

<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' cols=125 rows=30 name='newcontent' style='padding:20px;'>";
echo $document;

echo "\nWAS=" . date("Y/m/d") . " : " . time() . "\n\n";

echo file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);


echo '  </textarea><br>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
        <input type="hidden" name="file" value="'.$dir.'">
        <input type="hidden" name="action" value="source">
        </form>';

?>
</div>

</div>




</div></div>

</div>

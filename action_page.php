<?php require_once("header.php"); ?>

if <?php ($_POST["projects"] === 'biz')  {
 print "<h2>Business Projects:</h2>";

<ul>
  print "<li>Sweaters</li>";
  print "<li>Waterbottle</li>";
</ul> ?>
} elseif <?php ($_POST["projects"] === 'infosys')  {
 print "<h2>Information Systems Projects:</h2>";

 <ul>
  print "<li>Espian</li>;"
  print "<li>Cabins In Broken Bow</li>";
  print "<li>Website</li>;"
  print "<li>Database Connection</li>";
</ul> ?>
}


<?php require_once("footer.php"); ?>

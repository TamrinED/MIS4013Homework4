<?php require_once("header.php"); ?>

if <?php ($_POST["projects"] === 'biz')  {
 print "<h2>Business Projects:</h2>";

print "<ul>
  <li>Sweaters</li>
  <li>Waterbottle</li>
</ul>"; ?>
} elseif <?php ($_POST["projects"] === 'infosys')  {
 print "<h2>Information Systems Projects:</h2>";

print "<ul>
  <li>Espian</li>
  <li>Cabins In Broken Bow</li>
  <li>Website</li>
  <li>Database Connection</li>
</ul>"; ?>
}


<?php require_once("footer.php"); ?>

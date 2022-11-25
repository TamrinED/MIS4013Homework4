<?php require_once("header.php"); ?>

<?php 
if (isset($_POST['projects']) == 'biz') {
 echo "<h2>Business Projects:</h2>";

<ul>
  echo "<li>Sweaters</li>";
  echo "<li>Waterbottle</li>";
</ul>
} elseif (isset($_POST['projects']) == 'infosys') {
 echo "<h2>Information Systems Projects:</h2>";

 <ul>
  echo "<li>Espian</li>";
  echo "<li>Cabins In Broken Bow</li>";
  echo "<li>Website</li>";
  echo" <li>Database Connection</li>";
</ul>
}?>


<?php require_once("footer.php"); ?>

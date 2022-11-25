<?php require_once("header.php"); ?>

if <?php ($_POST["projects"] === 'biz')  Then {
 echo "<h2>Business Projects:</h2>

<ul>
  echo "<li>Sweaters</li>";
  echo "<li>Waterbottle</li>";
</ul>"; ?>
} elseif <?php ($_POST["projects"] === 'infosys') Then {
 echo "<h2>Information Systems Projects:</h2>

 <ul>
  echo "<li>Espian</li>;"
  echo "<li>Cabins In Broken Bow</li>";
  echo "<li>Website</li>;"
  echo "<li>Database Connection</li>";
</ul>"; ?>
}


<?php require_once("footer.php"); ?>

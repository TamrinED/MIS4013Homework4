<?php require_once("header.php"); ?>
<body>

 <h1>Projects according to their discipline</h1>
 
<?php 
if ($_POST['projects'] == 'biz') {
 echo "<h2>Business Projects:</h2>

<ul>
  <li>Sweaters</li>
  <li>Waterbottle</li>
</ul>";
 
} elseif ($_POST['projects'] == 'infosys') {
 echo "<h2>Information Systems Projects:</h2>

 <ul>
  <li>Espian</li>
  <li>Cabins In Broken Bow</li>
  <li>Website</li>
  <li>Database Connection</li>
</ul>";
}
?>


<?php require_once("footer.php"); ?>

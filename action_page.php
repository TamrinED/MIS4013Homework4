<?php require_once("header.php"); ?>
<body>

<?php 
if (isset($_POST['projects']) == 'biz') {
 echo "<h1>Business Projects:</h1>

<ul>
  <li>Sweaters</li>
  <li>Waterbottle</li>
</ul>";
 
} elseif (isset($_POST['projects']) == 'infosys') {
 echo "<h1>Information Systems Projects:</h1>

 <ul>
  <li>Espian</li>
  <li>Cabins In Broken Bow</li>
  <li>Website</li>
  <li>Database Connection</li>
</ul>";
}
?>


<?php require_once("footer.php"); ?>

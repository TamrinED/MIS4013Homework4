<?php require_once("header.php"); ?>

  <body>
<h1>Instructors</h1>
<table class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>First Name</th>
      <th>Last Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
$servername = "localhost";
$username = "tamrined_suser";
$password = "(_y)XTDI)NmV";
$dbname = "tamrined_4013Homework3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT InstructorID, FirstName, LastName FROM Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  <tr>
    <td>
      <form method="post" action="instructor-course.php">
                <input type="submit" name="InstructorID" value="<?=$row["InstructorID"]?>" />
               
              </form></td>
    <td><?=$row["FirstName"]?></td>
    <td><?=$row["LastName"]?></td>
    <td>
              
            </td>
  </tr>
<?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tbody>
    </table>
</body>
    
<?php require_once("footer.php"); ?>

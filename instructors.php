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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  switch ($_POST['saveType']) {
    case 'Add':
      $sqlAdd = "insert into Instructor (FirstName) value (?)";
      $stmtAdd = $conn->prepare($sqlAdd);
      $stmtAdd->bind_param("s", $_POST['iName']);
      $stmtAdd->execute();
      echo '<div class="alert alert-success" role="alert">New instructor added.</div>';
      break;
    case 'Edit':
      $sqlEdit = "update Instructor set FirstName=? where ID=?";
      $stmtEdit = $conn->prepare($sqlEdit);
      $stmtEdit->bind_param("si", $_POST['iName'], $_POST['iid']);
      $stmtEdit->execute();
      echo '<div class="alert alert-success" role="alert">Instructor edited.</div>';
      break;
    case 'Delete':
      $sqlDelete = "delete from Instructor where ID=?";
      $stmtDelete = $conn->prepare($sqlDelete);
      $stmtDelete->bind_param("i", $_POST['iid']);
      $stmtDelete->execute();
      echo '<div class="alert alert-success" role="alert">Instructor deleted.</div>';
      break;
  }
}
?>

$sql = "SELECT InstructorID, FirstName, LastName FROM Instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
?>
  
     <tr>
            <td><?=$row["ID"]?></td>
            <td><a href="instructor-section.php?id=<?=$row["ID"]?>"><?=$row["FirstName"]?></a></td>
            <td>
              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#editInstructor<?=$row["ID"]?>">Edit</button>
              <div class="modal fade" id="editInstructor<?=$row["ID"]?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editInstructor<?=$row["ID"]?>Label" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="editInstructor<?=$row["ID"]?>Label">Edit Instructor</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="">
                        <div class="mb-3">
                          <label for="editInstructor<?=$row["ID"]?>Name" class="form-label">Name</label>
                          <input type="text" class="form-control" id="editInstructor<?=$row["ID"]?>Name" aria-describedby="editInstructor<?=$row["ID"]?>Help" name="iName" value="<?=$row['FirstName']?>">
                          <div id="editInstructor<?=$row["ID"]?>Help" class="form-text">Enter the instructor's name.</div>
                        </div>
                        <input type="hidden" name="iid" value="<?=$row['ID']?>">
                        <input type="hidden" name="saveType" value="Edit">
                        <input type="submit" class="btn btn-primary" value="Submit">
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </td>
            <td>
              <form method="post" action="">
                <input type="hidden" name="iid" value="<?=$row["ID"]?>" />
                <input type="hidden" name="saveType" value="Delete">
                <input type="submit" class="btn" onclick="return confirm('Are you sure?')" value="Delete">
              </form>
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
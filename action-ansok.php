
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />

<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">

</head>

<body>

<?php include 'header.html';?>

<div class="grid-container bli-karnevalist" id="content-paper">

<div>
	
</div>

<main>
	<h2>Ansök till sektion</h2>
<p>
Välj sektion
</p>
<form action="action-ansok.php" method="post">

<select name="sektion">
  <option value="AdministerIT">AdministerIT</option>
  <option value="Biljonsen">Biljonsen</option>
  <option value="Blädderiet">Blädderiet</option>
  <option value="Dansen">Dansen</option>
</select>
<br />
<br />
  Förnamn: <br /><input class="text-input" type="text" name="fornamn"><br /><br />
  Efternamn: <br /><input class="text-input" type="text" name="efternamn"><br /><br />
  E-mail: <br /><input class="text-input" type="text" name="mail">

  <br /><br />

  <input class="submit" type="submit">

 
</form>
  <br /><br />
 <?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$FORNAMN = $_POST["fornamn"];
$EFTERNAMN = $_POST["efternamn"];
$MAIL = $_POST["mail"];
$SEKTION = $_POST["sektion"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

/*

$sql = "CREATE TABLE Student (studentId INT AUTO_INCREMENT PRIMARY KEY, sektion VARCHAR(255), fornamn VARCHAR(255), efternamn VARCHAR(255), email VARCHAR(255))";


if ($db_conn->query($sql) === TRUE) {
    echo "New table created successfully";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/



if (!empty($FORNAMN) && !empty($EFTERNAMN) && !empty($MAIL) && !empty($SEKTION)) {
  $sql = "INSERT INTO Student (sektion, fornamn, efternamn, email)
  VALUES ('$SEKTION', '$FORNAMN', '$EFTERNAMN', '$MAIL')";

  if ($db_conn->query($sql) === TRUE) {
    echo "<div class='success-notice'>Din ansökan har skickats!</div>";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
} 
}   else {
    echo "<div class='error-notice'>Ett eller flera fält är tomma!</div>";
  }

/*

$sql = "DELETE FROM gastbok WHERE namn = 'Pelle'";

if ($db_conn->query($sql) === TRUE) {
    echo "row deleted successfully";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/




$db_conn->close();

?>

</main>

<div>
</div>
</div>



<?php include 'footer.html';?>

<script src="script.js"></script>
</body>

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
	<h2>Reservera biljetter</h2>
<p>
Välj nöje 
</p>
<form action="action-reservera-biljetter.php" method="post">

<select name="noje">
  <option value="Cirkusen">Cirkusen</option>
  <option value="Dansen">Dansen</option>
  <option value="Barnevalen">Barnevalen</option>
  
</select>
<br />
<p>
Antal biljetter 
</p>
<select name="antal-biljetter">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="47">47</option>
  
</select>

<br />
  Förnamn: <br /><input class="text-input" type="text" name="fornamn"><br /><br />
  Efternamn: <br /><input class="text-input" type="text" name="efternamn"><br /><br />
  E-mail: <br /><input class="text-input" type="text" name="mail">

  <input class="submit" type="submit">
 <br /><br /> 
</form>


 <?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$FORNAMN = $_POST["fornamn"];
$EFTERNAMN = $_POST["efternamn"];
$MAIL = $_POST["mail"];
$NOJE = $_POST["noje"];
$BILJETTANTAL = $_POST["biljettantal"];
/*$TOTALANTALDANSEN = $_POST ["totalantaldansen"]*/

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');


/*
$sql = "CREATE TABLE Biljetter (biljettId INT AUTO_INCREMENT PRIMARY KEY, noje VARCHAR(255), bilijettantal INT, fornamn VARCHAR(255), efternamn VARCHAR(255), email VARCHAR(255))";


if ($db_conn->query($sql) === TRUE) {
    echo "New table created successfully";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}
*/


$sql = "SELECT SUM(if(noje='$NOJE', antal, 0)) as TotalAntal
FROM Biljett";
if ($result=mysqli_query($db_conn,$sql))
  {
   echo "sql 2 success";

  // Fetch one and one row
  

while ($row = mysqli_fetch_object($result)) {
    $antal = $row->TotalAntal;
    echo "antal i databasen:" . $antal;
    echo "antal nya:" . $BILJETTANTAL;
    if (($antal+$BILJETTANTAL) <= 50){
       if (!empty($FORNAMN) && !empty($EFTERNAMN) && !empty($MAIL) && !empty($NOJE) && !empty($BILJETTANTAL)) {
  $sql = "INSERT INTO Biljett (noje, fornamn, efternamn, email, antal)
  VALUES ('$NOJE', '$FORNAMN', '$EFTERNAMN', '$MAIL', '$BILJETTANTAL')";

  if ($db_conn->query($sql) === TRUE) {
    echo "<div class='success-notice'>Dina biljetter har reserverats!</div>";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
} 
}   else {
    echo "<div class='error-notice'>Ett eller flera fält är tomma!</div>";
  }

    } else {
      echo "för många!";
    }


echo "framför sql 2";

}

} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
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
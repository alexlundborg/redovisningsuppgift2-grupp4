<?php
// You'd put this code at the top of any "protected" page you create

// Always start this first
 session_start();

if ( isset( $_SESSION['user_id'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages

} else {
    // Redirect them to the login page
    header("Location: http://www.grupp4.icsweb.se/admin/login-page.php");
}
?>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>

  <?php include 'header.php';?>


<div class="grid-container" id="content-paper">
<section id="show-on-mobile">
	
 <li> <a id="active" href="studenter.php">Ansökningar</a> </li>

<li>  <a href="nytt-inlagg.php">Nytt inlägg</a> </li>

<li>  <a href="ny-handelse.php">Ny händelse</a> </li>

</section>

<main>
    <div class="top-bar">
<div class="left">
  <form action="show-student-table.php" method="post">
   <select id="select-tabell" name="tabell">
   <option name="alla">Alla studenter</option>
    <option name="AdministerIT">AdministerIT</option>
    <option name="Biljonsen">Biljonsen</option>
    <option name="Blädderiet">Blädderiet</option>
    <option name="Dansen">Dansen</option>
  </select>
    <button type="submit" class="show">Visa</button>
</form>
</div>
<div class="search">
  <form action="search-student.php" method="post">
  <input id="search" name="searchQuery" placeholder="Sök...">
      <button type="submit" class="show">Sök</button>
    </form>
  </div>
</div>

<?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$ID = $_POST["id"];
$fornamn = $_POST["change-fornamn"];
$efternamn = $_POST["change-efternamn"];
$email = $_POST["change-email"];
$sektion = $_POST["change-sektion"];


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "UPDATE Student SET sektion = '$sektion', fornamn = '$fornamn', efternamn = '$efternamn', email = '$email' WHERE studentID = '$ID'";

if ($db_conn->query($sql) === TRUE) {
    echo "<br /><br /><div class='success-notice'>Uppgifter sparade</div>";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

$sql = "SELECT * FROM Student WHERE studentID = '$ID'";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
 while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='change-row'><form action='action-redigera-student.php' method='post'><div class='grid-container-change'><div><h3>Förnamn</h3><input id='change-fornamn' name='change-fornamn' value='%s'> </div><div><h3>Efternamn</h3><input id='change-efternamn' name='change-efternamn' value='%s'></div><div><br /><h3>E-post</h3><input id='change-email' name='change-email' value='%s'></div> <div><br /><h3>Sektion</h3><select id='change-sektion' name='change-sektion' name='tabell'>
   <option name='current'>%s</option>
    <option name='AdministerIT'>AdministerIT</option>
    <option name='Biljonsen'>Biljonsen</option>
    <option name='Blädderiet'>Blädderiet</option>
    <option name='Dansen'>Dansen</option>
  </select>    </div></div>
 <button name='id' class='submit-change' type='submit' value='%s'>Verkställ</button></form>
</div> \n",$row[2],$row[3], $row[4], $row[1], $row[0]);
    }

   
  // Free result set
  mysqli_free_result($result);
}


$db_conn->close();

?>



</main>

<aside>
	
</aside>
</div>



<script src="script.js"></script>
<script>

</script>
</body>
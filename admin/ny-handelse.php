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
	
 <li> <a href="studenter.php">Ansökningar</a> </li>

<li>  <a href="nytt-inlagg.php">Nytt inlägg</a> </li>

<li>  <a id="active" href="">Ny händelse</a> </li>

</section>

<main>
 

<h2>Skapa en händelse</h2>
<form action="action-ny-handelse.php" method="post">
  
 <input id="titel" name="titel" placeholder="Titel" required><br />
  <textarea id="brodtext" name="brodtext" required></textarea><br/>
  <input class="submit" type="submit" value="Skapa händelse">
</form>

<?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$TITEL = $_POST["titel"];
$BRODTEXT = $_POST["brodtext"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "SELECT * FROM Event ORDER BY eventID DESC";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='row'> %s <form action='action-radera-handelse.php' method='post'>  <button name='id' class='delete' type='submit' value='%s'>Radera</button></form>
</div> \n",$row[1],$row[0]);
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
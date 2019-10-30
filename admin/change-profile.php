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
    
<?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$ID = $_POST["id"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "SELECT * FROM User";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='change-row'><form action='action-change-profile.php' method='post'><div class='grid-container-change'><div><h3>Namn</h3><input id='change-fornamn' name='change-namn' value='%s'> </div><div><h3>Lösenord</h3><input id='change-efternamn' name='change-password' value='%s'></div></div>
 <button name='id' class='submit-change' type='submit' value='%s'>Verkställ</button></form>
</div> \n",$row[0],$row[1],$row[0]);
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
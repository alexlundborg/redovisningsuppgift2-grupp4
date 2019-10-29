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
  <input id="search" placeholder="Sök...">
</div>
</div>

<?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$select = $_POST["tabell"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

if ($select == 'alla' || $select == 'Alla studenter'){
  $sql = "SELECT * FROM Student ORDER BY efternamn ASC";
  echo("<h3>" . $select ."</h3>");
} else{
  $sql = "SELECT * FROM Student where sektion = '$select' ORDER BY efternamn ASC";
  echo("<h3>" . $select ."</h3>");

}


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='row'> %s <b>%s</b>  <form action='radera-student.php' method='post'>      
 <button name='id' class='delete' type='submit' value='%s'>Radera</button></form><a href='' class='change'>ändra</a><span class='current-sektion'> %s </span>
</div> \n",$row[2],$row[3],$row[0], $row[1]);
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
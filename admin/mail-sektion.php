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
$sektion = $_POST["sektion"];
$subject = $_POST["subject"];
$msg = $_POST["msg"];
$bool = false;

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "SELECT email FROM Student where sektion = '$sektion' ORDER BY efternamn ASC";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row = mysqli_fetch_object($result)) {
    $mail = $row->email;
    mail("$mail","$subject",$msg);
    $bool = true;
}
    if ($bool) {
        echo "<div class='success-notice'>E-post skickat till samtliga i $sektion.</div>";
      } else {
        echo "<div class='error-notice'>Sektionen har inga ansökningar.</div>";
      }
}

$sql = "SELECT * FROM Student where sektion = '$sektion' ORDER BY efternamn ASC";
  
  echo("<br /><h3>" . $sektion ."</h3><form action='compose-mail.php' method='post'>      
 <button name='sektion' class='send-mail' type='submit' value='$sektion'>Skicka epost till samtliga nedan</button></form>");



if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
   while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='row'> %s <b>%s</b> <br /> <p class='mail'>%s</p> <form action='radera-student.php' method='post'>      
 <button name='id' class='delete' type='submit' value='%s'>Radera</button></form><form action='redigera-student.php' method='post'>      
 <button name='id' class='change' type='submit' value='%s'>ändra</button></form><span class='current-sektion'> %s </span>
</div> \n",$row[2],$row[3],$row[4],$row[0], $row[0], $row[1]);
    }


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
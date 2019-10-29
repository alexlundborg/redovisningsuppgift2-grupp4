<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>


<div id="sticky">
    <header>
    <div class="grid-container-header" id="header-container">
    <a href="admin.html"><div class="brand">
  <h1 id="title">Lundakarnevalen</h1>
    <h1 id="subtitle">Admin page</h1>

</div></a>
  <img id="logga" src="bilder/logga-karneval-b.png">

<div>


</div>
</header>

</div>

 <div class="header-background">



</div>

<div class="grid-container" id="content-paper">
<div>
	

</div>


<main>
<?php


 /*
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');
$TITEL = $_POST["titel"];
$BRODTEXT = $_POST["brodtext"];

$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');



$sql = "CREATE TABLE User (userName VARCHAR(255) PRIMARY KEY, password VARCHAR(255))";


if ($db_conn->query($sql) === TRUE) {
    echo "New table created successfully";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
}

if (true) {
  $sql = "INSERT INTO User (userName, password)
  VALUES ('admin', 'abc123')";

  if ($db_conn->query($sql) === TRUE) {
    echo "<div class='success-notice'>Användare har skapats!</div>";
} else {
    echo "Fel: " . $sql . "<br>" . $db_conn->error;
} 
}   else {
    echo "<div class='error-notice'>Kan inte skapa användare utan username!</div>";
  }
*/

?>


<h2>Logga in</h2>
<form action="action-login.php" method="post">
  
 <input id="username" name="username" placeholder="Användarnamn"><br />
 <input type="password" id="password" name="password" placeholder="Lösenord"><br />
  <input class="submit" type="submit" value="Logga in">
</form>


</main>

<aside>
	
</aside>
</div>



<script src="script.js"></script>
<script>

</script>
</body>
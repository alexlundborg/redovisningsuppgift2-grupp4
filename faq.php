<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php include 'header.html';?>

<div class="bli-karnevalist">
<div class="grid-item left-images">

       <img class="left-img" src="bilder/Lundakarnevalen 2014 02.jpg">
       <img class="left-img" src="bilder/Lundakarnevalen 2014 09.jpg">
      
  
</div>
  <div class="grid-item center">
  <h2>FAQ</h2>
  <h1> Bra frågor - Bra att veta</h1>
  <br /><br />

<h3>Fråga 1 ?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nibh at dui hendrerit fringilla. Cras id velit nisl. In convallis dolor eu lacus ultrices porta. </p><br /><br />

<h3>Fråga 2 ?</h3>
<p>Maecenas mi diam, elementum vel mollis sed, porttitor at justo. Morbi at feugiat sem, sollicitudin viverra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nibh at dui hendrerit fringilla. Cras id velit nisl. In convallis dolor eu lacus ultrices porta. </p><br /><br />

<h3>Fråga 3 ?</h3>
<p> Sed efficitur nibh at dui hendrerit fringilla. Cras id velit nisl. In convallis dolor eu lacus ultrices porta. Maecenas mi diam, elementum vel mollis sed, porttitor at justo. Morbi at feugiat sem, sollicitudin viverra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br /><br />

 



</p>

<?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

echo "<h2>Diskussionsforum</h2>";

$sql = "SELECT * FROM gastbok";


if ($result=mysqli_query($db_conn,$sql))
  {
    echo "<table style='border:1px solid #ccc; border-collapse: collapse;'><tr><td style='border:1px solid #ccc'><b>Namn:</b></td><td style='border:1px solid #ccc'><b>Meddelande:</b></td></tr>";
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<tr> <td style='border:1px solid #ccc'> %s </td> <td style='border:1px solid #ccc'> %s </td> <tr />\n",$row[0],$row[1]);
    }

    echo "</table>";
  // Free result set
  mysqli_free_result($result);
}


$db_conn->close();

?>

<br />

<h2>Skriv en kommentar</h2>
<form action="action-faq.php" method="post">
  <p>Namn:</p><input type="textbox" class="text-input" name="namn"><br />
  <p>Din kommentar</p><textarea name="meddelande"></textarea><br /><br />
  <input class="submit" type="submit" value="Submit">
</form>

</div>
<div class="grid-item right">
  
  <img class="left-img" src="bilder/vem.jpg" onmouseover="this.src='bilder/vemB.jpg';" onmouseout="this.src='bilder/vem.jpg';" />
  <img class="left-img" src="bilder/var.jpg" onmouseover="this.src='bilder/varB.jpg';" onmouseout="this.src='bilder/var.jpg';" />
  <img class="left-img" src="bilder/när.jpg" onmouseover="this.src='bilder/närB.jpg';" onmouseout="this.src='bilder/när.jpg';" />


 
 
  


</div>
</div>



<?php include 'footer.html';?>

<script src="script.js"></script>
</body>
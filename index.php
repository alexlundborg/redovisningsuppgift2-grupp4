<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>
<?php include 'header.html';?>


<div class="grid-container" id="content-paper">
<section id="show-on-mobile">
  <h3>Karnevalståget</h3>
  <div id="slideshow">
   <div>
     <img src="bilder/Karneval2010042.jpg">
   </div>
   <div>
     <img src="bilder/Karneval2010045.jpg">
   </div>
  
</div>
    <h3>Karnevalister</h3>
<div id="slideshow2">
   <div>
     <img src="bilder/Karneval2010015.jpg">
   </div>
   <div>
     <img src="bilder/Karneval2010014.jpg">
   </div>
   <div>
     <img src="bilder/Karneval2010017.jpg">
   </div>
   <div>
     <img src="bilder/Karneval2010018.jpg">
   </div>
  
</div>
</section>

<main>

  <?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "SELECT * FROM BloggInlaggPlus ORDER BY inlaggID DESC";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='post'><h2>%s</h2> <p>%s</p></div> \n",$row[1],$row[2]);
    }

   
  // Free result set
  mysqli_free_result($result);
}


$db_conn->close();

?>


  <h2>Det är på gång!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nibh at dui hendrerit fringilla. Cras id velit nisl. In convallis dolor eu lacus ultrices porta. Maecenas mi diam, elementum vel mollis sed, porttitor at justo. Morbi at feugiat sem, sollicitudin viverra augue. Suspendisse quam nisl, tempor nec posuere ut, fermentum eget elit. Nullam nec suscipit erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent egestas, neque sit amet lobortis aliquet, nisl justo blandit ipsum, sit amet tincidunt diam lectus vitae velit. Vivamus vitae lacus lorem. Praesent bibendum nunc molestie, finibus augue id, blandit ligula. Ut vitae turpis sed nulla molestie pulvinar eu vel magna.</p>
<img src="bilder/Lundakarnevalen 2010 33.jpg" id="main-image"> 
<p>
In sollicitudin sodales sodales. Curabitur ac arcu non massa congue rhoncus sit amet non ex. Pellentesque euismod, justo vel pellentesque ullamcorper, lacus nisi interdum est, pellentesque mattis risus est non eros. Vivamus ullamcorper est vel magna pulvinar, et aliquet tortor aliquam.

Vivamus convallis dolor a ligula feugiat, vel tempus lectus vestibulum. Phasellus quam purus, efficitur vel consequat vel, commodo vel nulla. In at aliquet justo, a lobortis felis. Curabitur vel lacinia nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In vitae cursus tellus. Nam egestas urna eros. Maecenas pellentesque, ante sit. Mauris placerat convallis dolor sed gravida. Sed lacus diam, faucibus at purus non, faucibus mollis turpis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In feugiat ac leo quis blandit. Duis tempor, justo eget aliquam accumsan, sapien metus placerat felis, vitae vehicula libero augue nec dolor. Nulla facilisi. Phasellus dignissim pretium elit in congue. Morbi ultrices neque id erat facilisis consequat. Aliquam et ante orci. Proin venenatis auctor diam eget fermentum. Ut congue malesuada ex placerat maximus. Sed ut posuere nulla. Praesent vitae leo nec enim blandit porta ut at enim.

</p>
</main>

<aside>
 <?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

$sql = "SELECT * FROM Event ORDER BY eventID DESC";


if ($result=mysqli_query($db_conn,$sql))
  {
   
  // Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
    printf ("<div class='news'><h3>%s</h3> <p>%s</p></div> \n",$row[1],$row[2]);
    }

   
  // Free result set
  mysqli_free_result($result);
}


$db_conn->close();

?>


  <div class="news">
        <img src="bilder/Karneval2010082.jpg" id="event1">

    <h3>Oktoberevent</h3>
    <p>Morbi vehicula felis nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In convallis vehicula vulputate. Fusce maximus nisi tellus, sed lobortis sapien vestibulum nec. Cras condimentum, orci sed dapibus congue, arcu sem hendrerit eros, eu pulvinar metus velit sed justo.
    </p>
  </div>
  <div class="news">
    <h3>Novemberevent</h3>
    <p>
    Aliquam sapien quam, cursus sed enim id, varius sagittis enim. Morbi ut lacus sodales, pretium neque vel, tempus nisi. Ut at pulvinar enim. Aenean ut turpis tellus. Maecenas porta tempus ligula, quis fringilla purus tincidunt eu. </p>
  </div>
</aside>
</div>


<?php include 'footer.html';?>

<script src="script.js"></script>


</body>
<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


</head>

<body>


  <div id="myNav" class="overlay">
  <div class="overlay-content">
    <div class="grid-container">
      <div class="grid-item">
      </div>
      <div class="grid-item">
      <a href="bli-karnevalist.html">Introduktion</a>
      <hr />
      <a href="ansok.html">Ansök till karnevalen</a>
      </div>
      <div class="grid-item overlay-right">
        <h2>Information om sektionerna</h2>
     <a href="administerit.html">AdministerIT</a>
    <a href="biljonsen.html">Biljonsen</a>
    <a href="bladderiet.html"> Blädderiet</a>
    <a href="dansen.html">Dansen</a>
   </div>
   <div class="grid-item">

   </div>
  </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  </div>
</div>

<div id="myNav2" class="overlay">
  <div class="overlay-content">
    <div class="grid-container">
      <div class="grid-item">
      </div>
      <div class="grid-item">
      <h2>Information om karnevalen</h2>
    <a href="nojen.html">Nöjen</a>
    <a href="artister.html">Artister</a>
    <a href="taget.html"> Tåget</a>
    <a href="faq.html">FAQ</a>
    <a href="hitta-hit.html">Hitta hit</a>
      </div>
      <div class="grid-item">
   </div>
   <div class="grid-item">

   </div>
  </div>
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>

  </div>
</div>

  
<header>
  <div class="grid-container">
  <div class="grid-item"></div>
  <h1><a href="index.html">Lundakarnevalen 2022</a></h1>
  <img id="logga" src="bilder/logo.png" >
</div>
</header>

<nav>
  <a class="openNav" style="cursor:pointer" onclick="openNav()">Bli karnevalist</a>
  <a class="openNav" style="cursor:pointer" onclick="openNav2()">Om karnevalen!</a>
	<a href="">Reservera biljetter</a>
  <a href="">Gästbok</a>
</nav>
<div class="grid-container">
<section>
	
</section>

<main>

 <?php
define('DB_USER', '4003497_vu37133');
define('DB_PASSWORD','wwHe25Ng');
define('DB_HOST','my06s.sqlserver.se');
define('DB_NAME','4003497-db4');


$db_conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die ('No DB-connection via MySQLi');

echo "<h2>Gästbok</h2>";

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

<h2>Skriv i gästboken</h2>
<form action="action-gastbok.php" method="post">
  <p>Namn:</p><input type="textbox" class="text-input" name="namn"><br />
  <p>Din kommentar</p><textarea name="meddelande"></textarea><br /><br />
  <input class="submit" type="submit" value="Submit">
</form>

</main>

<aside>

</aside>
</div>
<footer id="footer">

<div class="wrap">

<div class="footer-left">
  <h4><p>Kontakta oss</p></h4>
<h3></a><a href="mailto:name@email.com">info@lundakarneval.se</a></h3>
<h3><a href="tel:+46 70 23 456 78">070-123 456 78</a></h3>
<h3><a href="hitta-hit.html">Hitta hit</a></h3>
<h3><a href="faq.html">FAQ</a></h3>
</div>



<div class="footer-right">
<h3>© 2019 Grupp 4</h3>
</div>



<div class="footer-centered">
  <h4><p>Sektioner</p></h4>
<h3><a href="bladderiet.html">Blädderiet</a></h3>
<h3><a href="dansen.html">Dansen</a></h3>
<h3><a href="administerit.html">AdministerIT</a></h3>
<h3><a href="biljonsen.html">Blijonsen</a></h3>
</div>

</div>

</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	
	$("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  5000);

$("#slideshow2 > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow2 > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow2');
},  5000);


function openNav() {
    document.getElementById("myNav2").style.display = "none";
    document.getElementById("myNav2").style.height = "0%";
    document.getElementById("myNav").style.display = "block";
    document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.display = "block";
  document.getElementById("myNav2").style.display = "block";
}

function openNav2() {    
    document.getElementById("myNav").style.display = "none";
    document.getElementById("myNav").style.height = "0%";
    document.getElementById("myNav2").style.display = "block";
    document.getElementById("myNav2").style.height = "100%";
}

function closeNav2() {
  document.getElementById("myNav2").style.height = "0%";
  document.getElementById("myNav").style.display = "block";
  document.getElementById("myNav2").style.display = "block";
}

</script>
</body>
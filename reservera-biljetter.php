<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />

<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">

</head>

<body>


  <?php include 'header.html';?>
  
<div class="grid-container reservera-biljetter" id="content-paper-reservera">
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
<select name="biljettantal">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="47">47</option>

  
</select>

<br />
  Förnamn: <br /><input class="text-input" type="text" name="fornamn" required><br /><br />
  Efternamn: <br /><input class="text-input" type="text" name="efternamn" required><br /><br />
  E-mail: <br /><input class="text-input" type="text" name="mail" required>


  <input class="submit" type="submit">
 <br /><br /> 
 
</form>


</p>
</main>

<div>
</div>
</div>



<?php include 'footer.html';?>

<script src="script.js"></script>
</body>
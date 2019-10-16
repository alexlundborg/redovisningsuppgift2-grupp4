<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />

<link rel="stylesheet" href="style.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">

</head>

<body>

<?php include 'header.html';?>

<div class="grid-container bli-karnevalist" id="content-paper">

<div>
	
</div>

<main>
	<h2>Ansök till sektion</h2>
<p>
Välj sektion
</p>
<select>
  <option value="AdministerIT">AdministerIT</option>
  <option value="Biljonsen">Biljonsen</option>
  <option value="Blädderiet">Blädderiet</option>
  <option value="Dansen">Dansen</option>
</select>
<br />
<br />
<form>
  Förnamn: <br /><input class="text-input" type="text" name="first-name"><br /><br />
  Efternamn: <br /><input class="text-input" type="text" name="last-name"><br /><br />
  E-mail: <br /><input class="text-input" type="text" name="mail">

<br /><br />

  <input class="submit" type="submit">
</form>



</main>

<div>
</div>
</div>



<?php include 'footer.html';?>

<script src="script.js"></script>
</body>
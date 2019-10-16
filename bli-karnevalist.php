<head>
<meta charset="UTF-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />

<link rel="icon" href="bilder/vieriet.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="style.css">
</head>

<body>
 <?php include 'header.html';?>



<div class="grid-container bli-karnevalist" id="content-paper">
<div class="grid-item left-images">

       
  
  <img class="left-img" src="bilder/Karneval2010054.jpg">
  <img class="left-img" src="bilder/Karnevalist.jpg">
</div>
	<div class="grid-item center">
  <h2>Gå med i ett av världens största idéella evenemang!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed efficitur nibh at dui hendrerit fringilla. Cras id velit nisl. In convallis dolor eu lacus ultrices porta. Maecenas mi diam, elementum vel mollis sed, porttitor at justo. Morbi at feugiat sem, sollicitudin viverra augue.</p><br /><br />
<iframe width="560" height="315" src="https://www.youtube.com/embed/DdYgGZBKVR4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</p>
</div>
<div class="grid-item right">
 <h3> Nedräkning till karnevalen:</h3>

  <div class="container">
  <ul>
    <li><span id="days"></span>Dagar</li>
    <li><span id="hours"></span>Timmar</li>
    <li><span id="minutes"></span>Minuter</li>
    <li><span id="seconds"></span>Sekunder</li>
  </ul>
</div>

</div>
</div>





 
<?php include 'footer.html';?>

<script src="script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    const second = 1000,
     minute = second * 60,
    hour = minute * 60,
      day = hour * 24;

let countDown = new Date('May 8, 2022 00:00:00').getTime(),
    a = setInterval(function() {

      let now = new Date().getTime(),
        distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      if (distance < 0) {
        clearInterval(x);
      }

    }, second)

</script>


</body>
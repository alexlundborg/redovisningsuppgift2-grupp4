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
<h4>© 2019 Grupp 4</h4>
<h3>Nedräkning till Karnevalen</h3>
<p id="timer"></p>
<h3>Sidan senast uppdaterad</h3>
<span id="update"></span>
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



<script src="script.js"></script>
<script type="text/javascript">
	
	const second = 1000,
      minute = second * 60,
      hour = minute * 60,
      day = hour * 24;

let countDown = new Date('May 8, 2022 00:00:00').getTime(),
    x = setInterval(function() {

      let now = new Date().getTime(),
          distance = countDown - now;

      document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
      
      //do something later when date is reached
      //if (distance < 0) {
      //  clearInterval(x);
      //  'IT'S MY BIRTHDAY!;
      //}

    }, second)

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
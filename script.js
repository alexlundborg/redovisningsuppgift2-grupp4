function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}


//Timer countdown
var countDownDate = new Date("may 8, 2022 15:37:25").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();
    
  var distance = countDownDate - now;
    

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "KARNEVALDAGS!";
  }
}, 1000);

//Site last updated
document.getElementById("update").innerHTML = document.lastModified;


//form validation
function validateForm() {
  var x = document.forms["ansoksektion"]["fname"].value;
  if (x == "") {
    alert("Formulär ej korrekt ifyllt");
    return (false)
  }
}
function validateForm() {
  var z = document.forms["ansoksektion"]["lname"].value;
  if (z == "") {
    alert("Formulär ej korrekt ifyllt");
    return (false)
  }
}

function validateForm() 
{
	var w = document.forms["ansoksektion"]["email"].value;
 if (w == "") {
  }
    alert("Formulär ej korrekt ifyllt");
    return (false)
}

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



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
    alert("Fyll i ditt förnamn");
    return false;
  }
}
function validateForm() {
  var z = document.forms["ansoksektion"]["lname"].value;
  if (z == "") {
    alert("Fyll i ditt efternamn");
    return false;
  }
}

function validateForm() 
{
	var w = document.forms["ansoksektion"]["email"].value;
 if (w == "") {
    alert("Fyll i en korrekt email");
    return (false)
}


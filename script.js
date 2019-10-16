
var navOpen = false;

function openNav() {
    document.getElementById("myNav2").style.display = "none";
    document.getElementById("myNav2").style.height = "0%";
    document.getElementById("myNav").style.display = "block";
   document.getElementById("myNav").style.height = "400px";
    document.getElementById("header-container").style.height = "500px";
    navOpen = true;
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
  document.getElementById("myNav").style.display = "block";
  document.getElementById("myNav2").style.display = "block";
  document.getElementById("header-container").style.height = "100px";
    navOpen = false;

}

function openNav2() {    
    document.getElementById("myNav").style.display = "none";
    document.getElementById("myNav").style.height = "0%";
    document.getElementById("myNav2").style.display = "block";
    document.getElementById("myNav2").style.height = "400px";
    document.getElementById("header-container").style.height = "500px";
    navOpen = true;

}

function closeNav2() {
  document.getElementById("myNav2").style.height = "0%";
  document.getElementById("myNav").style.display = "block";
  document.getElementById("myNav2").style.display = "block";
  document.getElementById("header-container").style.height = "100px";
    navOpen = false;

}
// When the user scrolls down 1px from the top of the document, resize the navbar's padding and the logo's font size


window.onscroll = function() {scrollFunction()};


function scrollFunction() {
  if (document.body.scrollTop > 1 && !navOpen || document.documentElement.scrollTop > 1 && !navOpen) {
    document.getElementById("nav-padding").style.padding = "10px";
   document.getElementById("header-container").style.padding = "50px 5px 5px 5px";
    document.getElementById("header-container").style.height = "70px";
    document.getElementById("title").style.fontSize = "30px";
    document.getElementById("subtitle").style.fontSize = "15px";
      document.getElementById("logga").style.height = "60px";
      document.getElementById("content-paper").style.margin = "40px auto 0 auto";
  document.getElementById("myNav").style.height = "0";
  document.getElementById("myNav2").style.height = "0";

  if (document.body.scrollTop > 50 && !navOpen || document.documentElement.scrollTop > 50 && !navOpen) {
       document.getElementById("header-container").style.padding = "5px";

}

  } else if (!navOpen){
    document.getElementById("nav-padding").style.padding = "30px";
  document.getElementById("header-container").style.padding = "20px";
  document.getElementById("header-container").style.height = "100px";
    document.getElementById("title").style.fontSize = "50px";
    document.getElementById("subtitle").style.fontSize = "23px";
      document.getElementById("logga").style.height = "100px";
      document.getElementById("content-paper").style.margin = "-70px auto 0 auto";

  }

  else {
        document.getElementById("header-container").style.height = "600px";

  }
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









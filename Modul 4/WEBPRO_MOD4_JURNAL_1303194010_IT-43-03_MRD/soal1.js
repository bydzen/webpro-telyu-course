function text() {
  document.getElementById("demo").innerHTML = "MODUL 3 JAVASCRIPT";

  // Back to normal (normalize)
  document.getElementById("demo").style.color = "#000000";
  document.getElementById("demo").style.fontSize = "16px";
  document.getElementById("demo").style.fontWeight = "normal";
  document.getElementById("demo").style.fontStyle = "normal";
}

function color() {
  document.getElementById("demo").style.color = "#ff0000";
}

function bold() {
  document.getElementById("demo").style.fontWeight = "bold";
}

function itl() {
  document.getElementById("demo").style.fontStyle = "italic";
}

function uk() {
  document.getElementById("demo").style.fontSize = "30px";
}

function hps() {
  document.getElementById("demo").innerHTML = "";

  // Back to normal (normalize)
  document.getElementById("demo").style.color = "#000000";
  document.getElementById("demo").style.fontSize = "16px";
  document.getElementById("demo").style.fontWeight = "normal";
  document.getElementById("demo").style.fontStyle = "normal";
}

let konamiCode = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65];
let enteredCode = [];

document.addEventListener("keydown", function(event) {
  enteredCode.push(event.keyCode);
  if (enteredCode.length > 10) {
    enteredCode.shift();
  }
  if (enteredCode.toString() === konamiCode.toString()) {
    document.body.style.backgroundColor = "#2A609E";
    document.body.style.color = "white";
    document.body.style.fontFamily = "roboto";
    document.querySelector("h1").style.textAlign = "center";
  }
});



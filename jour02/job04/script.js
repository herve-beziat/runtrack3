document.addEventListener("keypress", function(event) {
    let keylogger = document.getElementById("keylogger");
    let key = event.key;
    if (key.match(/[a-z]/i)) {
        keylogger.value += key;
    }
  });

document.addEventListener("DOMContentLoaded", function() {
    let button = document.querySelector("#button");
 
        button.addEventListener("click", citation);

    function citation(){
        let txt = document.createElement("p");
        fetch('expression.txt')
        .then(response => response.text())
        
        .then(textString => {
            txt.textContent = textString
        });

        quote = document.querySelector("body");
        quote.append(txt);
    }
});
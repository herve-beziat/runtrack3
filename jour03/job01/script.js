//Méthode en Java script

document.addEventListener("DOMContentLoaded", function() {
    let montretxt = document.querySelector("#montrer");
    let cachetxt = document.querySelector("#cacher");
    let text = document.querySelector("#text");
    montretxt.addEventListener("click", () =>{
        text.style.display = "block";
    });

    cachetxt.addEventListener("click",() =>{
        text.style.display = "none";
    });
    console.log(montretxt,cachetxt);    
});


//Méthode en Jquery

// $(document).ready(function(){
//     $("#montrer").click(function(){
//         $("#text").show();
//     });
//     $("#cacher").click(function(){
//         $("#text").hide();
//     });
// });

// Reprenez vos fichiers index.html et style.css.
// Ajoutez en haut de la page, un <header> qui contient une liste de trois liens :
// ● Accueil,
// ● Présentation,
// ● Contact.
// Lorsque la résolution est inférieure ou égale à 767px : Les liens disparaissent pour
// laisser place à un hamburger button. Lorsque l’on clique sur celui-ci, les liens
// apparaissent. Si on re-clique, les liens disparaissent.

document.addEventListener('DOMContentLoaded', function loaded() {

    var buttonBurger = document.getElementsByClassName('burger-icon');
    
    var buttonNav = buttonBurger[0];
    
    var header = document.querySelector('header');
    
    buttonNav.addEventListener("click", function(){
    
        header.classList.toggle("open");
    
        console.log(buttonNav)
        
        
    
        });
    })
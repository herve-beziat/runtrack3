function jourtravaille(date) {
    let joursferies = [new Date("2020-01-01"), new Date("2020-04-13"), new Date("2020-05-01"), new Date("2020-05-08"), new Date("2020-05-21"), new Date("2020-06-01"), new Date("2020-07-14"), new Date("2020-08-15"), new Date("2020-11-01"), new Date("2020-11-11"), new Date("2020-12-25")];
    let jour = date.getDate();
    let mois = date.getMonth() +1;
    let annee = date.getFullYear();
    let joursdelasemaine = date.getDay();
    
    let estferie = joursferies.some(function(jourferie){
        return jourferie.getTime() === date.getTime();
    });

    if(estferie){
        console.log ("Le " + jour + "-" + mois + "-" + annee + " est un jour férié");
    }
    else if(joursdelasemaine === 0 || joursdelasemaine === 6){
        console.log ("Le " + jour + "-" + mois + "-" + annee + " est un week end");
    }
    else {
        console.log ("Le " + jour + "-" + mois + "-" + annee + " est un jour travaillé")
    }

}
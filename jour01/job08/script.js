function sommenombrespremiers(num1,num2){
    function estpremier(nombre){
        if (nombre < 2) {
            return false;
        }
        for(let i = 2; i <= Math.sqrt(nombre); i++ ) {
            if (nombre % i === 0){
                return false;
            }
        }
        return true;
    }
    if (estpremier(num1) && estpremier(num2)) {
        return num1 + num2;
    }
    else {
        return false;
    }
}
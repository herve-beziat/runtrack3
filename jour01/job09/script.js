function tri(numbers, order){
    if (order === "asc"){
        numbers.sort(function(a,b){
            return a-b;
        });
    }
    else if (order === "desc") {
        numbers.sort(function(a,b){
            return a+b;
        });

    }
    return numbers;
}
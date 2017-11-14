function productOf3Numers(arr) {
    let counterOfNegativeNumbers = 0;
    for(let i = 0;i<arr.length;i++){
        if(arr[i] == 0){
            console.log("Positive");
            break;
        }
        if(arr[i]<0){
            counterOfNegativeNumbers++;
        }
    }
    if(counterOfNegativeNumbers % 2 != 0){
        console.log("Negative");
    }
    else{
        console.log("Positive");
    }
}

let numbers = [2,3,-1];
productOf3Numers(numbers);
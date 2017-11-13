function largestThreeNums(arr) {
    let inputNumbers = arr.map(Number).sort((a,b) => b-a);
    for(let i = 0; i < 3 ; i++){
        if(inputNumbers[i]!=undefined)
            console.log(inputNumbers[i]);
    }
}

let numbers = [20,30];
largestThreeNums(numbers)
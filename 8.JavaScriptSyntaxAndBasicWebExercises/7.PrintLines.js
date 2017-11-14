function printLines(arr) {
    for(let line of arr){
        if(line === 'Stop'){
            break;
        }
        if(line !== 'Stop'){
            console.log(line);
        }
    }
}
function multiplyDevideNumber(arr) {
    let result = 0;
    if(arr[1]>=arr[0]){
        result = arr[0]*arr[1];
    }
    else{
        result = arr[0]/arr[1];
    }
    return result;
}
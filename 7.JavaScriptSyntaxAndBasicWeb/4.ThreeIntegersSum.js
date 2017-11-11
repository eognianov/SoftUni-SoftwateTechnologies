function solution(arr) {
    let num1=Number(arr[0]);
    let num2=Number(arr[1]);
    let num3=Number(arr[2]);
    if(num1 == num2+num3){
        console.log(`${num3} + ${num2} = ${num1}`);
    }
    else if(num2 == num1+num3){
        console.log(`${num3} + ${num1} = ${num2}`);
    }
    else if(num3 == num1+num2){
        console.log(`${num2} + ${num1} = ${num3}`);
    }
    else {
        console.log("No");
    }
}
array = [8,15,7];

solution(array)
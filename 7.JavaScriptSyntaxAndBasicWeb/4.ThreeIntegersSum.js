function solution([input]) {
    let arr = input.split(' ');
    let num1 = parseInt(arr[0]);
    let num2 = parseInt(arr[1]);
    let num3 = parseInt(arr[2]);

    if (num1+num2==num3){
        console.log(`${Math.min(num1,num2)} + ${Math.max(num1,num2)} = ${num3}`);
    } else if (num1+num3 == num2){
        console.log(`${Math.min(num1,num3)} + ${Math.max(num1,num3)} = ${num2}`)
    } else if (num2+num3 == num1){
        console.log(`${Math.min(num2,num3)} + ${Math.max(num2,num3)} = ${num1}`)
    } else{
        console.log('No');
    }
}

function solution2([input]) {
    let numbers = input.split(' ').map(x => Number(x));
    numbers.sort((a,b) => a -b);
    if(numbers[0] + numbers[1] == numbers[2]){
        console.log(`${numbers[0]} + ${numbers[1]} = ${numbers[2]}`)
    } else if(numbers[2] + numbers[1] == numbers[0]){
        console.log(`${numbers[1]} + ${numbers[2]} = ${numbers[0]}`)
    } else{
        console.log('No');
    }
}

let  numbers = ['8 5 7']
solution2(numbers)
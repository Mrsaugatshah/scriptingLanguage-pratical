function sumEvenNumbers(numbers) {
    let sum = 0;

    for (let i = 0; i < numbers.length; i++) {
        if (numbers[i] % 2 === 0) {
            sum = sum + numbers[i];
        }
    }

    return sum;
}

// Array of integers
let arr = [1, 2, 3, 4, 5, 6, 7, 8];

// Call the function
let result = sumEvenNumbers(arr);

console.log("Sum of even numbers = " + result);
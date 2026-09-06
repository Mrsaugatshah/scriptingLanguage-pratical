// Practical 5: JavaScript Built-in Objects

// 1. Array Object
let fruits = ["Apple", "Banana", "Mango"];
console.log("Array:", fruits);
console.log("First Fruit:", fruits[0]);
console.log("Array Length:", fruits.length);


// 2. Date Object
let today = new Date();
console.log("\nCurrent Date:", today);
console.log("Current Year:", today.getFullYear());


// 3. Math Object
let number = 16;
console.log("\nSquare Root of 16:", Math.sqrt(number));
console.log("2 raised to power 3:", Math.pow(2, 3));
console.log("Maximum number:", Math.max(10, 20, 30));


// 4. Number Object
let num = 123.4567;
console.log("\nOriginal Number:", num);
console.log("Fixed to 2 decimal places:", num.toFixed(2));


// 5. String Object
let text = "JavaScript Programming";
console.log("\nString:", text);
console.log("String Length:", text.length);
console.log("Uppercase:", text.toUpperCase());
console.log("Lowercase:", text.toLowerCase());
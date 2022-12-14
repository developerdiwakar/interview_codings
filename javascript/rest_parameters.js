/**
 * JavaScript rest parameters:
 * ES6 provides a new kind of parameter so-called rest parameter 
 * that has a prefix of three dots (...). 
 * A rest parameter allows you to represent an indefinite number of arguments as an array.
 * @param  {...any} args 
 * @returns
 */

// ## 1st Example - using normal function ##
/* function sum(...args){
    let total = 0;
    for (const a of args){
        total += a
    }
    return total;
} 

// Call the sum function
//console.log(sum(3,4,5,6,7,8,9)); // 42 */

// ## 2nd Example - using arrow function and filter() and reduce() method ##
let sum = (...args) => {
    // filter the array - return only 'number' elements
    return args.filter((n) => {
        return typeof n === 'number';
    })
    .reduce((prev, curr) => {
        // reduce the array - apply the operations and return only the single value
        return prev + curr;
    });
}
console.log(sum(10, 'hi', null, 12, undefined, 11)); // 33

// without rest parameters - and using ES5 and Array.prototype.filter().call() 
// and reduce() method 
/* function sum() {
    return Array.prototype.filter.call(arguments, (n) => {
        return typeof n === 'number';
    })
    .reduce((prev, curr) => {
        return prev + curr;
    });
}

console.log(sum(3, 'hello', 's', undefined, null, 4)); // 7 */
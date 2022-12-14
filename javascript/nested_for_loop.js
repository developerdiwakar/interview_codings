/**
 * Nested for loop example using multi-dimensional array
 */

// multi dimensional array
const numbers = [[1,2],[3,4,5],[6,7,8]];

function multiplyArray(arr){
    product = 1;
    for (let i = 0; i < arr.length; i++) {
        for (let j = 0; j < arr[i].length; j++) {
            product *= arr[i][j];   
        }
    }
    return product;
}

console.log(multiplyArray(numbers))
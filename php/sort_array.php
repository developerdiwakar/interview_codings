<?php declare(strict_types=1);
/**
 * Sort an Array, either in ascending order or descending order
 * example:
 * Sort an array in descending order
 * [3, 4, 1, 5, 6, 9, 7] = [9, 7, 6, 5, 4, 3, 1]
 */

# Sort array method
function sortArray(array $input, string $order='desc'): array
{
    $count = count($input);
    // if count is 0 or 1
    if($count <= 1){
        return $input;
    } 

    // if count is not 0 or 1
    for($i=0; $i < $count; $i++){
        $sortNumber = $input[$i];
        // $min = $input[$i];
        for($j=$i+1; $j < $count; $j++){
            $stmt = $order === 'desc' ? $sortNumber < $input[$j] : $sortNumber > $input[$j];
            if($stmt){
                $sortNumber = $input[$j];
                $input[$j] = $input[$i];
                $input[$i] = $sortNumber;
            }
            // if($order === 'desc'){
                // if($max < $input[$j]){
                //     $max = $input[$j];
                //     $input[$j] = $input[$i];
                //     $input[$i] = $max;
                // }
            // }
            /* else{
                if($min > $input[$j]){
                    $min = $input[$j];
                    $input[$j] = $input[$i];
                    $input[$i] = $min;
                } 
            } */
        }
    }
    return $input;
}

// Calling the Sort array function
$output = sortArray([3, 4, 1, 5, 6, 9, 7], 'asc');
print_r($output);
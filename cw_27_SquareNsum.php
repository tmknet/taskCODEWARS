<!-- 
    Complete the square sum function so that it squares each number 
    passed into it and then sums the results together.
 -->

 <?php
function square_sum($numbers): int {
    $sum = 0;
    
    foreach ($numbers as $number) {
        $sum += $number ** 2;
    }
    
    return $sum;
}
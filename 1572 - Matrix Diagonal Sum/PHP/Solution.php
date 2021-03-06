<?php

class Solution {

    /**
     * @param Integer[][] $mat
     * @return Integer
     */
    function diagonalSum($mat) {
        for ($i = 0, $sum = 0, $max = count($mat) - 1; $i <= $max; $i++) {
            $sum += $mat[$i][$i] + ($i != $max - $i ? $mat[$i][$max - $i] : 0);
        }
        
        return $sum;
    }   
}
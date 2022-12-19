<?php

function add($set, $new) {
    if (!in_array($new, $set)){
        $set[] = $new;
    }
}

function addAll($set, $new) {
    foreach ($set as $value) {
        if (!in_array($new, $value)){
            $set[] = $new;
        }
    }
}

function contains($set) {
    if (in_array($new, $set)){
       return true;
    } else {
        return false;
    }
}

function remove($set, $e) {
    unset($set[$e]);
}

function remove($set) {
    return sizeof($set);
}

function makeChange(){
    
    $set = array();
    
    // receives the input. Using 12 as the exemple;
    $input = 12;
    
    // get the values for each type of coin
    $quarters = input / 25;
    $dimes = input / 10;
    $nickels = input / 5;
    $pennies = input / 1;
    
    //set the SET
    $set = [$quarters, $dimes, $nickels, $pennies];
    
}


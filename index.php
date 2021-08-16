<?php

$data = [-4,3,-9,0,4,1,6];

$positive = [];
$negativeNumber = [];
$zeroNumber = [];
$genapNumber = [];
$ganjilNumber = [];

$length = count($data);

foreach($data as $item)
{
    if($item > 0)
    {
    	$decimalPositive = $item / $length;
        array_push($positive, round($decimalPositive, 3));
    }

    if($item < 0)
    {
        $decimalNegatif = $item / $length;
    	array_push($negativeNumber, round($decimalNegatif, 3));
    }

    if($item === 0)
    {
        $decimalZero = $item / $length;
    	array_push($zeroNumber, round($decimalZero, 3));
    }
    
    if ($item % 2 == 0) {
        $decimalGenap = $item / $length;
        array_push($genapNumber, round($decimalGenap, 3));
    }

    if ($item % 2 !== 0) {
        $decimalGanjil = $item / $length;
        array_push($ganjilNumber, round($decimalGanjil, 3));
    }

}

print_r($positive);
print_r($negativeNumber);
print_r($zeroNumber);
print_r($genapNumber);
print_r($ganjilNumber);

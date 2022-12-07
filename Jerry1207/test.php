<?php
$testArray=[1,2,3,4,5];
$doubleArray=[];
foreach($testArray as $key => $value){
    array_push($doubleArray,$value*2);
}
print_r($doubleArray);
?>
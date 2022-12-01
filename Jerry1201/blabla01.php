<?php

function Phone($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
// 選五支手機
// name price 組成二維陣列
// 加入地點變成三維陣列

$mobileArray = [
    [
        'name' => 'Google Pixel 7 Pro 12G/256G',
        'price' => '$27,800',
        'location' => ['北','中','南']
    ],
    [
        'name' => 'Google Pixel 7 Pro 12G/128G',
        'price' => '$24,990',
        'location' => ['中']
    ],

    [
        'name' => 'Google Pixel 7 8G/256G',
        'price' => '$20,500',
        'location' => ['北','南']
    ],


    [
        'name' => 'Google Pixel 7 8G/128G',
        'price' => '$17,500',
        'location' => ['中','南']
    ],
    [
        'name' => 'Google Pixel 6 Pro 12G/128G',
        'price' => '$18,990',
        'location' => ['北','中','南']
    ],
];

Phone($mobileArray);

foreach($mobileArray as $key => $value){
    echo "<hr>";
    Phone($value);
}

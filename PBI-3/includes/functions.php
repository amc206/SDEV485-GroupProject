<?php
//305/pizza/includes/function.php

function getToppings()
{
    $toppings = array('pepperoni', 'olives', 'sausage', 'mushrooms', 'pineapple');
    return $toppings;
}

function getSizes()
{
    $sizes = array('none'=> '-- Select a Size --', 'small'=>'Small','med'=>'Medium',
        'large'=>'Large', 'xl'=>"Extra Large");
    return $sizes;
}
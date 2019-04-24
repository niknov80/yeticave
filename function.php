<?php
date_default_timezone_set("Europe/Moscow");

function get_cost ($cost){
    $cost = ceil($cost);
    $cost = number_format($cost, 0, '.', ' ');
    $cost = $cost . " ₽";
    return $cost;
}

function include_template($file_path, $template_data){    
    if (file_exists($file_path)){ 
        $cont = require($file_path);
    } else {
        $cont = '';
    }
}


function timer (){
    $curday = intval(date('U'));
    $tomorrow  = strtotime('25.04.2019');
    $time_remaining = $tomorrow - $curday;
    $hours = floor($time_remaining/3600);
    $minutes = floor($time_remaining % 3600 / 60);    
    print ($hours . " : " . $minutes);
}



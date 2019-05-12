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
        ob_start();
        require($file_path);
        $cont = ob_get_clean(); 
    } else {
        $cont = '';
    }
    return $cont;
}

function timer ($ending_time){
    $curday = intval(date('U'));
    $tomorrow  = strtotime($ending_time);
    $time_remaining = $tomorrow - $curday;
    $hours = floor($time_remaining/3600);
    $minutes = floor($time_remaining % 3600 / 60);    
    $end_time = ($hours . " : " . $minutes);
    return $end_time;
}

function searchUserByEmail($email_from_form, $registred_users){
    $result = false;    

    foreach($registred_users as $key => $usr){
        if ($email_from_form == $usr['email']){
            $result = $usr;
            break;
        }
    }
    
    return $result;
}
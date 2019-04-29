<?php
require_once('function.php');
require_once('data.php');

$announcement = null;
$cookie_name = 'lots_id';
$cookie_value = [];
$cookie_expire = strtotime("+1 day");
$cookie_path = "/";

if (isset($_GET['id'])){
    $cookie_value = $_GET['id'];

    $announcement_id = $_GET['id'];    
    foreach ($announcements as $key => $item){
        if ($item['id'] == $announcement_id){
            $announcement = $item['id'];           
            break;
        }
    }
} 

if(!$announcement){
    http_response_code(404);
    die();
}

$cookie_value_str = json_encode($cookie_value);
setcookie ($cookie_name, $cookie_value_str, $cookie_expire, $cookie_path);
var_dump($cookie_value);
var_dump($_COOKIE);

$timer = timer($ending_time);

$page_content = include_template('templates/lot.php', ['announcements' =>  $announcements[$announcement - 1], 'timer' => $timer, 'category' => $category]);

$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);
                        
print ($page_layout);

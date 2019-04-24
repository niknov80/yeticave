<?php
require_once('function.php');
require_once('data.php');

$announcement = null;

if (isset($_GET['id'])){
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



ob_start(); 
timer();
$timer = ob_get_clean();
ob_start();
include_template('templates/lot.php', ['announcements' =>  $announcements[$announcement], 'timer' => $timer, 'category' => $category]);
$page_content = ob_get_clean();


$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);
                        
print ($page_layout);

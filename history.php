<?php
require_once('function.php');
require_once('data.php');

if (isset($_COOKIE['lots_id'])){
    $visited_lots_id = json_decode($_COOKIE['lots_id']); 
}

$timer = timer($ending_time);

// var_dump($visited_lots_id);
$page_content = include_template('templates/history.php', ['category' => $category, 'visited_lots_id' => $visited_lots_id, 'announcements' => $announcements, 'timer' => $timer]);

$page_layout = include_template('templates/layout.php', [
    'category' => $category, 
    'pageTitle' => $page_title, 
    'pageContent' => $page_content, 
    'isAuth' => $is_auth, 
    'userName' => $user_name, 
    'userAvatar' => $user_avatar]);

print ($page_layout);
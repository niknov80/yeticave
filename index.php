<?php
require_once('function.php');

ob_start(); 
timer();
$timer = ob_get_clean();
ob_start();
include_template('templates/index.php', ['announcements' => $announcements, 'timer' => $timer]);
$page_content = ob_get_clean();

 
$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);
                          
print ($page_layout);


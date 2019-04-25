<?php
require_once('function.php');
require_once('data.php');

$page_content = include_template('templates/add.php', $timer);
 
$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);

print ($page_layout);
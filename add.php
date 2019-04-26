<?php
require_once('function.php');
require_once('data.php');


var_dump($_POST);

$page_content = include_template('templates/add.php', ['category' => $category]); 
$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);

print ($page_layout);
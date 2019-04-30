<?php
require_once('function.php');
require_once('data.php');

$announcement = null;
$cookie_name = 'lots_id';
$cookie_values = [];
$cookie_expire = strtotime("+1 day");
$cookie_path = "/";
$cookie_values_item = null;



if (isset($_GET['id'])){
    $cookie_values_item = $_GET['id'];

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




if (isset($_COOKIE['lots_id'])){
    $cookie_values = json_decode($_COOKIE['lots_id']);   
    $cookie_values[] = $cookie_values_item;
    $cookie_values = array_unique($cookie_values);
}

$cookie_value_str = json_encode($cookie_values);
setcookie ($cookie_name, $cookie_value_str, $cookie_expire, $cookie_path);


?>
    <!-- <pre>
        <?=var_dump($cookie_values);?>

    </pre> -->
<?php



$timer = timer($ending_time);

$page_content = include_template('templates/lot.php', ['announcements' =>  $announcements[$announcement - 1], 'timer' => $timer, 'category' => $category]);

$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);
                        
print ($page_layout);

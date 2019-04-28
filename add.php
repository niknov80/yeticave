<?php
require_once('function.php');
require_once('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;

    $required_fields = ['lot-name', 'category', 'message', 'lot-rate', 'lot-step', 'lot-date'];
    $num_fields = ['lot-rate', 'lot-step'];
    $error_items = [];
    $lot['file_uploaded'] = '';
    $errors = [];
    $form_invalid = '';

    if (isset($_FILES['photo']['name'])) {
        $lot['file_uploaded'] = 'form__item--uploaded';
        $path = $_FILES['photo']['name'];
        $res = move_uploaded_file($_FILES['photo']['tmp_name'], 'img/' . $path);
    }
    
    if (isset($path)) {
        $lot['path'] = $path;        
    } 
 

    foreach ($required_fields as $key) {            

        	if (empty($_POST[$key])) {                
                $errors[$key] = 'Это поле надо заполнить';
                $error_items[$key] = 'form__item--invalid';
                $form_invalid = 'form--invalid';
            } else {
                $error_items[$key] = '';
            }
            
            if ($key == 'lot-rate'){
                if (!filter_var((int)$_POST['lot-rate'], FILTER_VALIDATE_INT)){
                    $errors[$key] = 'Это поле должно содержать только цифры';
                }
            }
            elseif($key == 'lot-step'){
                if (!filter_var((int)$_POST['lot-step'], FILTER_VALIDATE_INT)){
                    $errors[$key] = 'Это поле должно содержать только цифры';
                }
            }
        }
    
    if (count($errors)){       
        $page_content = include_template('templates/add.php', ['category' => $category, 
                                                            'errors' => $errors, 
                                                            'form__item--invalid' => $error_items,
                                                            'form_invalid' => $form_invalid,
                                                            'file_uploaded' => $lot['file_uploaded']]);
    }else{
        $page_content = include_template('templates/view.php', ['category' => $category, 'lot' => $lot]);
    }

    
} else {
    $page_content = include_template('templates/add.php', ['category' => $category]);
}

$page_layout = include_template('templates/layout.php', ['category' => $category, 
                                          'pageTitle' => $page_title, 
                                          'pageContent' => $page_content, 
                                          'isAuth' => $is_auth, 
                                          'userName' => $user_name, 
                                          'userAvatar' => $user_avatar]);

print ($page_layout);
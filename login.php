<?php
require_once('function.php');
require_once('data.php');
require_once('userdata.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $form = $_POST;


    $required_fields = ['email', 'password'];
    $errors = [];
    $error_itemes = [];



    foreach ($required_fields as $field){
        if (empty($form[$field])){
            $errors[$field] = 'Это поле надо заполнить';  
            $error_items[$field] = 'form__item--invalid';
        } elseif (!empty($field[$field])&&($field == 'email')){           
                if (!filter_var($form['email'], FILTER_VALIDATE_EMAIL)){
                    $error_items[$field] = 'form__item--invalid';
                    $errors[$field] = 'Это поле должно содержать email';
                }         
        } else {
            $error_items[$field] = '';
        }        
    }   
    
    if(!count($errors) && ($user = searchUserByEmail ($form['email'], $users))){
  
        if (password_verify($form['password'], $user['password'])) {
			$_SESSION['user'] = $user;
		}
		else {
            $errors['password'] = 'Вы ввели неверный пароль';
            $error_items['password'] = 'form__item--invalid';
		}
    } else {
        $errors['email'] = 'Такой пользователь не найден';
        $error_items['email'] = 'form__item--invalid';
    }

    if (count($errors)){
        $page_content = include_template('templates/login.php', [
            'category' => $category, 
            'errors' => $errors, 
            'form__item--invalid' => $error_items]);

            $page_layout = include_template('templates/layout.php', [
                'category' => $category, 
                'pageTitle' => $page_title, 
                'pageContent' => $page_content]);

    } else {
        header ("Location: /index.php");
        exit();
    }
   
} else {
    if (isset($_SESSION['user'])) {
        $page_layout = include_template('templates/layout.php', [
            'category' => $category, 
            'pageTitle' => $page_title, 
            'pageContent' => $page_content, 
            // 'isAuth' => $is_auth, 
            'userName' => $_SESSION['user']['name'], 
            'userAvatar' => $user_avatar]);
        // $page_content = include_template('welcome.php', ['username' => $_SESSION['user']['name']]);
    }
    else {
        $page_content = include_template('templates/login.php', [
            'category' => $category]); 
            // 'errors' => $errors, 
            // 'form__item--invalid' => $error_items]);

        $page_layout = include_template('templates/layout.php', [
            'category' => $category, 
            'pageTitle' => $page_title, 
            'pageContent' => $page_content]); 
            // 'isAuth' => $is_auth]);
    }
}





 

                        
print ($page_layout);
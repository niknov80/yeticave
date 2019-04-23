<?php
require_once('function.php');

$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


$category = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

$announcements = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => $category[0],
        'price' => 10999,
        'img' => 'img/lot-1.jpg'
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $category[0],
        'price' => 159999,
        'img' => 'img/lot-2.jpg'
    ],
    [
        'title' => 'Крепления Union Contact pro 2015 года размер L/XL',
        'category' => $category[1],
        'price' => 8000,
        'img' => 'img/lot-3.jpg'
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $category[2],
        'price' => 10999,
        'img' => 'img/lot-4.jpg'
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $category[3],
        'price' => 7500,
        'img' => 'img/lot-5.jpg'
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => $category[5],
        'price' => 5400,
        'img' => 'img/lot-6.jpg'
    ],
];


function get_cost ($cost){
    $cost = ceil($cost);

    $cost = number_format($cost, 0, '.', ' ');
    $cost = $cost . " ₽";
    return $cost;
}

$page_content = include_template('templates/index.php', $announcements);

$layout_content = include_template('templates/layout.php', $category);

print($layout_content);
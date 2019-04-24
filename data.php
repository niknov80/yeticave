<?php
// ставки пользователей, которыми надо заполнить таблицу
$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$is_auth = (bool) rand(0, 1);
$user_name = 'Константин';
$user_avatar = 'img/user.jpg';
$page_title = 'Интернет-аукцион сноубордического и горнолыжного снаряжения';
$category = ["Доски и лыжи", "Крепления", "Ботинки", "Одежда", "Инструменты", "Разное"];

$announcements = [
    [
        'title' => '2014 Rossignol District Snowboard',
        'category' => $category[0],
        'price' => 10999,
        'img' => 'img/lot-1.jpg',
        'id' => 0
    ],
    [
        'title' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => $category[0],
        'price' => 159999,
        'img' => 'img/lot-2.jpg',
        'id' => 1
    ],
    [
        'title' => 'Крепления Union Contact pro 2015 года размер L/XL',
        'category' => $category[1],
        'price' => 8000,
        'img' => 'img/lot-3.jpg',
        'id' => 2
    ],
    [
        'title' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => $category[2],
        'price' => 10999,
        'img' => 'img/lot-4.jpg',
        'id' => 3
    ],
    [
        'title' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => $category[3],
        'price' => 7500,
        'img' => 'img/lot-5.jpg',
        'id' => 4
    ],
    [
        'title' => 'Маска Oakley Canopy',
        'category' => $category[5],
        'price' => 5400,
        'img' => 'img/lot-6.jpg',
        'id' => 5
    ],
];
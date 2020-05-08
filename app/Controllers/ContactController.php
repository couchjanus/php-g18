<?php

$title = 'Contact us';

// Чтобы проверить факт существования файла:

// if (file_exists(CONFIG."/contacts.txt")) {   
//     echo "Файл существует"; 
// }

// fopen() - открывает локальный или удаленный файл и возвращает указатель на него.

// $fh = fopen(CONFIG."/contacts.txt", 'r') or die("не удалось открыть файл");
// $fh = fopen(CONFIG."/contacts.txt", 'rb') or die("не удалось открыть файл");

// if (!is_dir(CONFIG."/contacts.txt")) {
//     $fh = fopen(CONFIG."/contacts.txt", 'rb') or die("не удалось открыть файл");    
// }

// ошибка при работе с файлами
// if (!is_dir(CONFIG."/contacts.txt")) {
//     $fh = @fopen(CONFIG."/contacts.txt", 'rb') or die("не удалось открыть файл");    
// }

// if ($fh) {
//     echo "File opened";
// }

// Для построчного чтения используется функция fgets()
// while (!feof($fh)) {
//     echo fgets($fh);
// } 

// поблочное считывание определенного количества байт из файла с помощью функции fread():
// while (!feof($fh)) {
//     echo fread($fh, 4096);
// }


// fclose($fh);
// echo "File closed";


// if (!is_dir(CONFIG."/contacts.txt")) {
//     $file = @file(CONFIG."/contacts.txt");
// }

// $count=count($file);
// echo $count;

// Если нам надо прочитать файл полностью:
// $contacts = file_get_contents(CONFIG."/contacts.txt");
// При этом нам не надо открывать явно файл, получать дескриптор, а затем закрывать файл.
// echo $contacts;


// $url = CONFIG."/contacts.json"; // your json file path
// $data = array(); // create empty array

// read json file from url
// $readJSONFile = file_get_contents($url);
// print_r($readJSONFile); // display contents

//convert json to array in php
// $data = json_decode($readJSONFile, TRUE);
// var_dump($data); // print array


$address = conf('contacts');
render('contact/index', array(
    'title' => 'Contact us',
    'address' => $address
));

// render('contact/index', compact('title', 'address'));

<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php'; 
    // echo str_replace('\\', '/', __DIR__) . str_replace('\\', '/', substr($class,9)) . '.php';
   
    if (file_exists($file)) {
        require $file;
        
    }
});


use MyProject\classes\User;
use MyProject\classes\SuperUser;


$user1 = new User('Nikita', 'Nikita1G', '123456');
$user2 = new User('Sergey', 'SerjioRadriges', '654321');
$user3 = new User('Danil', 'Danjon', '13579');


$user1->showInfo();
$user2->showInfo();
$user3->showInfo();

$user = new SuperUser('Polina', 'Polya', '11111', 'admin');
$user->showInfo();
$user->getInfo();

echo "<p>Всего обычных пользователей: " . User::$userCount . "\n</p>";
echo "<p>Всего cупер-пользователей: " . SuperUser::$superUserCount . "\n</p>";



<?php

require_once 'UserFactoryInterface.php';
require_once 'UserFactory.php';
require_once 'UserInterface.php';
require_once 'User.php';

$userFactory = new UserFactory();

$users = [
    $userFactory->createUser('Данил', 'Администратор', 'danil@example.com'),
    $userFactory->createUser('Никита', 'Пользователь', 'nikita@example.com'),
    $userFactory->createUser('Сергей', 'Менеджер', 'serg@example.com'),
    $userFactory->createUser('Дмитрий', 'Редактор', 'dmitri@example.com'),
    $userFactory->createUser('Полина', 'Гость', 'polina@example.com'),
];

return $users; // Возвращаем массив пользователей
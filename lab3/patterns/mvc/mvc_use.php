<?php

// mvc_use.php (Main File - MVC Execution)
require_once 'User.php';
require_once 'UserController.php';
require_once 'MarkdownView.php';

// 1. Model (Data)
$users = [
    new User('Данил', 'Администратор', 'danil@example.com'),
    new User('Никита', 'Пользователь', 'nikita@example.com'),
    new User('Сергей', 'Менеджер', 'serg@example.com'),
    new User('Дмитрий', 'Редактор', 'dmitri@example.com'),
    new User('Полина', 'Гость', 'polina@example.com'),
];

// 2. Controller (Logic)
$userController = new UserController($users);
$usersFromController = $userController->getUsers();

// 3. View (Presentation)
$markdownView = new MarkdownView();
$markdownOutput = $markdownView->render($usersFromController);

// Output the Markdown
echo $markdownOutput;
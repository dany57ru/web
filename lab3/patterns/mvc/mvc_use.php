<?php
require_once __DIR__ . '/models/users.php';
require_once __DIR__ . '/views/MarkdownView.php';
require_once __DIR__ . '/controllers/controller.php';

use mvc\controllers\controller;

error_reporting(E_ALL);
ini_set('display_errors', 1);

$controller = new Controller('users.md');
echo "<pre>" . $controller->render() . "</pre>";

echo "<!DOCTYPE html>
<html>
<head>
    <title>Список пользователей</title>
    <style>

        .diagram-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .diagram-btn:hover {
            background-color: #E9967A;
        }
    </style>
</head>
<body>";


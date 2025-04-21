<?php
namespace mvc\models;

class User
{
    public function __construct(
        public string $email,
        public string $password,
        public string $firstName,
        public string $lastName
    ) {}
}

class Users
{
    public array $collection;  // Явно указываем тип array

    public function __construct(public ?array $users = null)
    {
        $users ??= [
            new User(
                 'danil.arnautov@example.com',
                 'password',
                 'Данил',
                 'Арнаутов'),
            new User(
                 'dmitry@example.com',
                 'password',
                 'Дмитрий',
                 'Волосатов'),
            new User(
                 'nikita@example.com',
                 'password',
                 'Никита',
                 'Болховский'),
            new User(
                 'sergey@example.com',
                 'password',
                 'сергей',
                 'Колдунский')
        ];
        $this->collection = $users;
    }
}
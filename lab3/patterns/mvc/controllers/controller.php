<?php
namespace mvc\controllers;
use mvc\views\MarkdownView;
use mvc\models\users;

class Controller
{
    private Users $users;
    private MarkdownView $view;

    public function __construct(string $filename)
    {
        $this->users = new Users();
        $this->view = new MarkdownView();
    }

    public function render(): string
    {
        $userData = [];
        foreach ($this->users->collection as $user) {  
            $userData[] = [
                'firstName' => $user->firstName,
                'lastName' => $user->lastName,
                'email' => $user->email
            ];
        }
        return $this->view->render($userData);
    }
}
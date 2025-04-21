<?php
namespace mvc\views;

interface View
{
    public function render(array $data): string;
}
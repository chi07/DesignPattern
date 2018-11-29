<?php
namespace DesignPattern\Creational\AbstractFactory;

class PhpBookContent implements BookContent {
    public function getContent(): string
    {
        return "Content of Php book";
    }
}
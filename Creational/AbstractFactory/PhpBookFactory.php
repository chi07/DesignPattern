<?php
namespace DesignPattern\Creational\AbstractFactory;

class PhpBookFactory implements BookFactory {
    public function createTitleBook(): BookTitle
    {
        // TODO: Implement createTitleBook() method.
        return new PhpBookTitle();
    }

    public function createContentBook(): BookContent
    {
        // TODO: Implement createContentBook() method.
        return new PhpBookContent();
    }
}
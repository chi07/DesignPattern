<?php
namespace DesignPattern\Creational\AbstractFactory;

class GolangBookFactory implements BookFactory {
    public function createTitleBook(): BookTitle
    {
        // TODO: Implement createTitleBook() method.
        return new GolangBookTitle();
    }

    public function createContentBook(): BookContent
    {
        // TODO: Implement createContentBook() method.
        return new GolangBookContent();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:42 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

abstract class BookPublisher {
    public abstract function getBook(): Book;

    public function publishBook() {
        $book = $this->getBook();
        $book->getTitle();
        $book->getAuthor();
        $book->getContent();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/26/18
 * Time: 10:05 PM
 */

namespace DesignPattern\Creational\FactoryMethod;

abstract class BookPublisher {
    public abstract function getBook(): Book;

    public function printBook() {
        $book = $this->getBook();
        $book->getTitle();
        $book->getAuthor();
        $book->getContent();
    }
}

class GooglePublisher extends BookPublisher {
    public function getBook(): Book
    {
        // TODO: Implement getBook() method.
        return new GoBook();
    }
}

class PhpPubliser extends BookPublisher {
    public function getBook(): Book {
        // TODO: Implement getBook() method.
        return new PhpBook();
    }
}

interface Book {
    public function getTitle(): string ;
    public function getAuthor(): string ;
    public function getContent(): string ;
}

class GoBook implements Book {
    public function getTitle(): string
    {
        // TODO: Implement getTitle() method.
        return "Go in Action";
    }

    public function getAuthor(): string
    {
        // TODO: Implement getTitle() method.
        return "Google Team";
    }

    public function getContent(): string
    {
        // TODO: Implement getTitle() method.
        return "Here is the lesson about programming with Go!";
    }
}

class PhpBook implements Book {
    public function getTitle(): string
    {
        // TODO: Implement getTitle() method.
        return "Laravel";
    }

    public function getAuthor(): string
    {
        // TODO: Implement getTitle() method.
        return "Taylor Otwell";
    }

    public function getContent(): string
    {
        // TODO: Implement getTitle() method.
        return "The PHP Framework For Web Artisans!";
    }
}

function publishBook (BookPublisher $bookPublisher) {
    print ("Title: " . $bookPublisher->getBook()->getTitle() . "\n");
    print ("Author: " . $bookPublisher->getBook()->getAuthor() . "\n");
    print ("Content: " . $bookPublisher->getBook()->getContent() . "\n");
}

publishBook(new GooglePublisher());
print("\n\n");
publishBook(new PhpPubliser());
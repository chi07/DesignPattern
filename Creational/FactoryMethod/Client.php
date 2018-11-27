<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:49 AM
 */
namespace DesignPattern\Creational\FactoryMethod;

// set autoload
spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    require end($parts) . '.php';
});


function printBook (BookPublisher $bookPublisher) {
    writeln ("Title: " . $bookPublisher->getBook()->getTitle());
    writeln ("Author: " . $bookPublisher->getBook()->getAuthor());
    writeln ("Content: " . $bookPublisher->getBook()->getContent());
}

function writeln($line_in) {
    echo $line_in."<br/>";
}

printBook(new GooglePublisher());
print("\n\n");
printBook(new PhpPublisher());
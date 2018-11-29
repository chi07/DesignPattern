<?php

namespace DesignPattern\Creational\AbstractFactory;

// set autoload
spl_autoload_register(function ($class) {
    $parts = explode('\\', $class);
    require end($parts) . '.php';
});

function renderBook(BookFactory $bookFactory) {
    $bookTitle = $bookFactory->createTitleBook();
    print ($bookTitle->getTitle());

    print("\n\n");
    $contentBook = $bookFactory->createContentBook();
    print ($contentBook->getContent());
}

/**
 * Now, in other parts of the app, the client code can accept factory objects of
 * any type.
 */
print("Testing rendering with the Php factory:\n");
renderBook(new PhpBookFactory());
print("\n\n");

print("Testing rendering with the Go factory:\n");
renderBook(new GolangBookFactory());
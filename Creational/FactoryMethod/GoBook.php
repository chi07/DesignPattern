<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:46 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

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
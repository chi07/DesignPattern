<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:44 AM
 */

namespace DesignPattern\Creational\FactoryMethod;

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
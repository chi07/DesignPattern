<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:43 AM
 */
namespace DesignPattern\Creational\FactoryMethod;
class PhpPublisher extends BookPublisher {
    public function getBook(): Book {
        // TODO: Implement getBook() method.
        return new PhpBook();
    }
}
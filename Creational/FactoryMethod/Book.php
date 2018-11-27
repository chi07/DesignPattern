<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/27/18
 * Time: 9:41 AM
 */
namespace DesignPattern\Creational\FactoryMethod;

interface Book {
    public function getTitle(): string ;
    public function getAuthor(): string ;
    public function getContent(): string ;
}
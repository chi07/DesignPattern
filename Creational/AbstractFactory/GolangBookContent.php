<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/23/18
 * Time: 5:03 PM
 */
namespace DesignPattern\Creational\AbstractFactory;

class GolangBookContent implements BookContent
{
    public function getContent(): string
    {
        return "Content of Concurrency In Go book";
    }
}
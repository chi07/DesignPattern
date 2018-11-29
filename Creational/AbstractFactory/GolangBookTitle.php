<?php
/**
 * Created by PhpStorm.
 * User: chipv
 * Date: 11/23/18
 * Time: 5:03 PM
 */
namespace DesignPattern\Creational\AbstractFactory;

class GolangBookTitle implements BookTitle
{
    public function getTitle(): string
    {
        return "Go in Action";
    }
}
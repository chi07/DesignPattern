<?php
namespace DesignPattern\Creational\AbstractFactory;

interface BookFactory {
    public function createTitleBook(): BookTitle ;
    public function createContentBook(): BookContent ;
}
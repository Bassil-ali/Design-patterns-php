<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory;

class AbstractFactoryTest extends  TestCase
{

    public  function testCanCreateBMWCare()
    {
        $careFactory = new CarAbstractFactory(200000);
        $myCar = $careFactory->createBMWCare();

        $this->assertInstanceOf(BMWCar::class,$myCar);
    }

    public  function testCanCreateBenzCar(){

        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->createBenzCar();

        $this->assertInstanceOf(BenzCar::class ,$myCar);
    }
}
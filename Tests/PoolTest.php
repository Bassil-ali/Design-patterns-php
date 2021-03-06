<?php


namespace Tests;


use Creational\Pool\Car;
use Creational\Pool\CarPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends  TestCase
{
    private  $carPool;

    protected function setUp() :void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        $this->carPool = new CarPool();
    }


    public  function  testCanRentCar()
    {
        $myCar = $this->carPool->rentCar();
        // Create a stub for the SomeClass class.
        $stub = $this->createMock(Car::class);

        // Configure the stub.
        $stub->method('moveCar')
        ->willReturn('car is moving ');

        $this->assertInstanceOf( Car::class , $myCar,'done');
        $this->assertEquals(0,$this->carPool->getFreeCount());
        
    }

    public  function  testCanFreeCar() {
        $myCar = $this->carPool->rentCar();
        $myCar2 = $this->carPool->rentCar();
        $this->assertEquals(0, $this->carPool->getFreeCount());

        $this->carPool->freeCar($myCar);
        $this->assertEquals(2,$this->carPool->getReport());
        $this->assertEquals(1, $this->carPool->getFreeCount());

    }

}
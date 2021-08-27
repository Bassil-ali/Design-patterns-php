<?php


namespace Tests;


use PHPUnit\Framework\TestCase;
use Structural\Decorator\BlackPainitngDecorator;
use Structural\Decorator\BluePainitngDecorator;
use Structural\Decorator\Car;
use Structural\Decorator\Painting;
use Structural\Decorator\RedPainitngDecorator;

class DecoratorTest extends  TestCase
{
    public function testCanPaintCarWithBlackAndBlueColors(): void
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BlackPainitngDecorator($painting);
        $painting = new BluePainitngDecorator($painting);

        //before send data to parent class after use interface implement value to
        // interface ande giv it to class and this class send to paranet by overritwe
        $this->assertEquals('', $car->getColor());

        //use interface implement value to
        // interface ande giv it to class and this class send to paranet by overritwe
         $painting->paint($car);

         $this->assertEquals('-blue--black-',$car->getColor());

    }

    public function testCanPaintCarWithRedAndBlueColors(): void
    {
        $car = new Car();
        $painting = new Painting();
        $painting = new BluePainitngDecorator($painting);
        $painting = new RedPainitngDecorator($painting);

        $painting->paint($car);

        $this->assertEquals('-red--blue-',$car->getColor());
    }

}
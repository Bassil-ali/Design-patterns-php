<?php


namespace Structural\Decorator;


class Car
{
    private  $color = '';

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color .= $color;
    }
}
<?php


namespace Behavioral\Specification;


class YearOfExPSpecification implements SpecificationInterface
{
    private  $minYears;

    public function __construct(int $minYears)
    {
        $this->minYears = $minYears;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        return  $cv->getYOfEx() >= $this->minYears;
    }

}
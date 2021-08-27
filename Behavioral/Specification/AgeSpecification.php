<?php


namespace Behavioral\Specification;


class AgeSpecification implements SpecificationInterface
{

    private  $minAge;
    private  $maxAge;

    public function __construct(int $minAge, int $maxAge)
    {

        $this->minAge = $minAge;
        $this->maxAge = $maxAge;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        return $cv->getAge() >= $this->minAge && $cv->getAge() <= $this->maxAge;
    }
}
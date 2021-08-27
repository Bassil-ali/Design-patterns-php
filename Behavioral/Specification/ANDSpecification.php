<?php


namespace Behavioral\Specification;


class ANDSpecification implements  SpecificationInterface
{
    private  $specs;

    public function __construct(SpecificationInterface ... $specs)
    {
        $this->specs = $specs;
    }

    public function isSatisfiedBy(Cv $cv): bool
    {
        foreach ($this->specs as $spec)
        {
            if(!$spec->isSatisfiedBy($cv)){
                return false;
            }
        }
        return  true;
    }
}
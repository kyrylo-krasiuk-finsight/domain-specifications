<?php

namespace App\Domain\Constraint;

use App\Domain\Contracts\ConstraintInterface;
use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\IntSpecificationException;
use App\Domain\Specification\IntSpecification;

class IntConstraint implements ConstraintInterface
{
    private SpecificationInterface $specification;

    public function __construct(
        private int $paramInt
    ) {
        $this->specification = new IntSpecification($this->paramInt);
    }

    public function check(): void
    {
        if (!$this->specification->isSatisfiedBy()) {
            throw new IntSpecificationException($this->specification);
        }
    }
}

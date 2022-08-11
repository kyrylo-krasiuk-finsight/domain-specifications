<?php

namespace App\Domain\Constraint;

use App\Domain\Contracts\ConstraintInterface;
use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\StringSpecificationException;
use App\Domain\Specification\StringSpecification;

class StringConstraint implements ConstraintInterface
{
    private SpecificationInterface $specification;

    public function __construct(
        private string $paramString
    ) {
        $this->specification = new StringSpecification($this->paramString);
    }

    public function check(): void
    {
        if (!$this->specification->isSatisfiedBy()) {
            throw new StringSpecificationException($this->specification);
        }
    }
}

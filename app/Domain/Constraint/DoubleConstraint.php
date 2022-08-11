<?php

namespace App\Domain\Constraint;

use App\Domain\Contracts\ConstraintInterface;
use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\IntSpecificationException;
use App\Domain\Exceptions\StringSpecificationException;
use App\Domain\Specification\IntSpecification;
use App\Domain\Specification\StringSpecification;

class DoubleConstraint implements ConstraintInterface
{
    private SpecificationInterface $intSpecifications;
    private SpecificationInterface $stringSpecifications;

    public function __construct(
        private int $paramInt,
        private string $paramString
    ) {
        $this->intSpecifications = new IntSpecification($this->paramInt);
        $this->stringSpecifications = new StringSpecification($this->paramString);
    }

    public function check(): void
    {
        if (!$this->intSpecifications->isSatisfiedBy()) {
            throw new IntSpecificationException($this->intSpecifications);
        }

        if (!$this->stringSpecifications->isSatisfiedBy()) {
            throw new StringSpecificationException($this->stringSpecifications);
        }
    }
}

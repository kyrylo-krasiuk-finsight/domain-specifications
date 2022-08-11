<?php

namespace App\Domain\Specification;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\IntSpecificationException;

class IntSpecification implements SpecificationInterface
{
    public function __construct(
        private readonly int $paramInt
    ) {}

    public function isSatisfiedBy(): bool
    {
        if (!\is_int($this->paramInt)) {
            throw new IntSpecificationException($this->paramInt);
        }

        if ($this->paramInt < 10000) {
            throw new IntSpecificationException($this->paramInt);
        }

        return $this->paramInt > 10000;
    }
}

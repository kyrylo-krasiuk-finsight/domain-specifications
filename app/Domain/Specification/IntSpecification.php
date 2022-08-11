<?php

namespace App\Domain\Specification;

use App\Domain\Contracts\SpecificationInterface;

class IntSpecification implements SpecificationInterface
{
    public function __construct(
        private int $paramInt
    ) {}

    public function isSatisfiedBy(): bool
    {
        if (!\is_int($this->paramInt)) {
            return false;
        }

        return $this->paramInt > 50;
    }

    public function getParamInt(): int
    {
        return $this->paramInt;
    }
}

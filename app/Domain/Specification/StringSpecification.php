<?php

namespace App\Domain\Specification;

use App\Domain\Contracts\SpecificationInterface;

class StringSpecification implements SpecificationInterface
{
    public function __construct(
        private string $paramString
    ) {}

    public function isSatisfiedBy(): bool
    {
        if (!\is_string($this->paramString)) {
            return false;
        }

        return \is_string($this->paramString);
    }

    public function getParamString(): string
    {
        return $this->paramString;
    }
}

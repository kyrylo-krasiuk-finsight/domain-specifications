<?php

namespace App\Domain\Specification;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\StringSpecificationException;

class StringSpecification implements SpecificationInterface
{
    public function __construct(
        private readonly string $paramString
    ) {}

    public function isSatisfiedBy(): bool
    {
        if (!\is_string($this->paramString)) {
            throw new StringSpecificationException($this->paramString);
        }

        return \is_string($this->paramString);
    }
}

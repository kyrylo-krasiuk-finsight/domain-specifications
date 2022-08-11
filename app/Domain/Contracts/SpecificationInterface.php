<?php

namespace App\Domain\Contracts;

interface SpecificationInterface
{
    public function isSatisfiedBy(): bool;
}

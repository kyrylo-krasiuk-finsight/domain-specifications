<?php

namespace App\Domain\Contracts;

interface DomainValidatorInterface
{
    public function validate(): void;
}

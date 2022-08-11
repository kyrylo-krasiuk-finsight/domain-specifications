<?php

namespace App\Domain\Contracts;

interface ConstraintInterface
{
    public function check(): void;
}

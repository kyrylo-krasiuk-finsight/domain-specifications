<?php

namespace App\Domain\DomainValidator;

use App\Domain\Contracts\ConstraintInterface;
use App\Domain\Contracts\DomainValidatorInterface;

abstract class DomainValidator implements DomainValidatorInterface
{
    protected array $constraints = [];

    public function validate(): void
    {
        /** @var ConstraintInterface $constraint */
        foreach ($this->constraints as $constraint) {
            $constraint->check();
        }
    }

    abstract public static function builder(): self;
    abstract public function build(): self;
}

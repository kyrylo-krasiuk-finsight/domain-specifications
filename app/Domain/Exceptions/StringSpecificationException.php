<?php

namespace App\Domain\Exceptions;

use DomainException;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Specification\StringSpecification;

class StringSpecificationException extends DomainException
{
    public function __construct(
        SpecificationInterface $specification
    ) {
        /** @var StringSpecification $specification  */
        parent::__construct(
            sprintf(
                'Some error with %s string param',
                $specification->getParamString()
            )
        );
    }
}

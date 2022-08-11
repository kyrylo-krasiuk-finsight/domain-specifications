<?php

namespace App\Domain\Exceptions;

use DomainException;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Specification\IntSpecification;

class IntSpecificationException extends DomainException
{
    public function __construct(
        SpecificationInterface $specification
    ) {
        /** @var IntSpecification $specification */
        parent::__construct(
            sprintf(
                'Some error with %s int param',
                $specification->getParamInt()
            )
        );
    }
}

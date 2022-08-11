<?php

namespace App\Domain\Exceptions;

use DomainException;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Specification\IdSpecification;

class IdSpecificationException extends DomainException
{
    public function __construct(
        SpecificationInterface $specification
    ) {
        /** @var IdSpecification $specification */
        parent::__construct(
            sprintf(
                'Some error with %s ID param',
                $specification->getId()
            )
        );
    }
}

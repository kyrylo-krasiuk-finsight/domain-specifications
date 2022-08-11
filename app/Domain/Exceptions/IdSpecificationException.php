<?php

namespace App\Domain\Exceptions;

use DomainException;

class IdSpecificationException extends DomainException
{
    public function __construct(
         int $paramInt
    ) {
        parent::__construct(
            sprintf(
                'Some error with %s ID param',
                $paramInt
            )
        );
    }
}

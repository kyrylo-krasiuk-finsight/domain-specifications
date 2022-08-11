<?php

namespace App\Domain\Exceptions;

use DomainException;

class IntSpecificationException extends DomainException
{
    public function __construct(
         int $paramInt
    ) {
        parent::__construct(
            sprintf(
                'Some error with %s int param',
                $paramInt
            )
        );
    }
}

<?php

namespace App\Domain\Exceptions;

use DomainException;

class StringSpecificationException extends DomainException
{
    public function __construct(
         string $paramString
    ) {
        parent::__construct(
            sprintf(
                'Some error with %s string param',
                $paramString
            )
        );
    }
}

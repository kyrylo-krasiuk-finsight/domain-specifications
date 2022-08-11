<?php

namespace App\Domain\Constraint;

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

use App\Domain\Contracts\ConstraintInterface;
use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\IdSpecificationException;
use App\Domain\Specification\IdSpecification;

class IdConstraint implements ConstraintInterface
{
    private SpecificationInterface $specification;

    public function __construct(
        private int $paramInt
    ) {
        $this->specification = new IdSpecification($this->paramInt);
    }

    public function check(): void
    {
        try {
            if (!$this->specification->isSatisfiedBy()) {
                throw new IdSpecificationException($this->specification);
            }
        } catch (\Exception|ContainerExceptionInterface|NotFoundExceptionInterface $e) {
            dd($e);
        }
    }
}

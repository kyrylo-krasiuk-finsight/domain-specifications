<?php

namespace App\Domain\DomainValidator;

use App\Domain\Contracts\DomainValidatorInterface;
use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Specification\IntSpecification;
use App\Domain\Specification\StringSpecification;

class CreateCompanyValidator implements DomainValidatorInterface
{
    protected array $specifications = [];

    protected string $paramString;
    protected int $paramInt;

    public static function builder(): self
    {
        return new self();
    }

    public function build(): self
    {
        $this->specifications[] = new StringSpecification($this->paramString);
        $this->specifications[] = new IntSpecification($this->paramInt);

        return $this;
    }

    public function validate(): void
    {
        /** @var SpecificationInterface $specification */
        foreach ($this->specifications as $specification) {
            $specification->isSatisfiedBy();
        }
    }

    public function setParamString(string $paramString): self
    {
        $this->paramString = $paramString;

        return $this;
    }

    public function setParamInt(int $paramInt): self
    {
        $this->paramInt = $paramInt;

        return $this;
    }
}

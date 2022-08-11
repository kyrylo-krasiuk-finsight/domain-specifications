<?php

namespace App\Domain\DomainValidator;

use App\Domain\Constraint\IntConstraint;
use App\Domain\Constraint\StringConstraint;

class CreateCompanyValidator extends DomainValidator
{
    protected string $paramString;
    protected int $paramInt;

    public static function builder(): self
    {
        return new self();
    }

    public function build(): self
    {
        $this->constraints[] = new StringConstraint($this->paramString);
        $this->constraints[] = new IntConstraint($this->paramInt);

        return $this;
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

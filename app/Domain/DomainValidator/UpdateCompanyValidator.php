<?php

namespace App\Domain\DomainValidator;

use App\Domain\Constraint\DoubleConstraint;
use App\Domain\Constraint\IdConstraint;

class UpdateCompanyValidator extends CreateCompanyValidator
{
    protected int $id;

    public static function builder(): self
    {
        return new self();
    }

    public function build(): self
    {
        $this->constraints[] = new IdConstraint($this->id);
        $this->constraints[] = new DoubleConstraint($this->paramInt, $this->paramString);

        return $this;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}

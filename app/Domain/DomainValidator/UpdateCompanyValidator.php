<?php

namespace App\Domain\DomainValidator;

use App\Domain\Specification\IdSpecification;

class UpdateCompanyValidator extends CreateCompanyValidator
{
    protected int $id;

    public static function builder(): self
    {
        return new self();
    }

    public function build(): self
    {
        $this->specifications[] = new IdSpecification($this->id);

        return $this;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }
}

<?php

namespace App\Domain;

use App\Domain\DomainValidator\CreateCompanyValidator;
use App\Domain\DomainValidator\UpdateCompanyValidator;

class DomainService
{
    public function createCompany(): int
    {
        CreateCompanyValidator::builder()
            ->setParamString('test 111')
            ->setParamInt(10000)
            ->build()
            ->validate();

        return 1;
    }

    public function updateCompany(int $id): int
    {
        UpdateCompanyValidator::builder()
            ->setParamString('test 111')
            ->setParamInt(100)
            ->setId($id)
            ->build()
            ->validate();

        return $id;
    }
}

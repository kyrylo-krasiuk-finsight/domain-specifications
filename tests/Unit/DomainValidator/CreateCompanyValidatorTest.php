<?php

namespace Tests\Unit\DomainValidator;

use App\Domain\DomainValidator\CreateCompanyValidator;
use Tests\TestCase;

class CreateCompanyValidatorTest extends TestCase
{
    public function testBuilder()
    {
        $this->assertEquals(new CreateCompanyValidator(), CreateCompanyValidator::builder());
    }
}

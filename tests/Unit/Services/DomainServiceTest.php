<?php

namespace Tests\Unit\Services;

use App\Domain\DomainService;
use Tests\TestCase;

class DomainServiceTest extends TestCase
{
    public function testCreateCompany()
    {
        $domainService = new DomainService();

        $this->assertEquals(1, $domainService->createCompany());
    }

    public function testUpdateCompany()
    {
        //$this->instance(
        //    Repository::class,
        //    $this->mock(Repository::class, function (MockInterface $mock) {
        //        $mock->shouldHaveBeenCalled();
        //    })
        //);

        $domainService = new DomainService();

        $id = 2;

        $this->assertEquals($id, $domainService->updateCompany($id));
    }
}

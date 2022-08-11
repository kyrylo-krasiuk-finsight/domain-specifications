<?php

namespace App\Domain\Specification;

use Illuminate\Container\Container;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Exceptions\IdSpecificationException;
use App\Domain\Repository\Repository;

class IdSpecification implements SpecificationInterface
{
    private Container $container;

    public function __construct(
        private readonly int $id
    ) {
        $this->container = Container::getInstance();
    }

    public function isSatisfiedBy(): bool
    {
        if (!\is_int($this->id)) {
            throw new IdSpecificationException($this->id);
        }

        /** @var Repository $repository */
        $repository = $this->container->get(Repository::class);

        if (!$item = $repository->getById($this->id)) {
            throw new IdSpecificationException($this->id);
        }

        return $item['id'] > 10000;
    }
}

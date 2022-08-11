<?php

namespace App\Domain\Specification;

use Illuminate\Container\Container;

use App\Domain\Contracts\SpecificationInterface;
use App\Domain\Repository\Repository;

class IdSpecification implements SpecificationInterface
{
    private Container $container;

    public function __construct(
        private int $id
    ) {
        $this->container = Container::getInstance();
    }

    /**
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function isSatisfiedBy(): bool
    {
        if (!\is_int($this->id)) {
            return false;
        }

        /** @var Repository $repository */
        $repository = $this->container->get(Repository::class);

        if (!$item = $repository->getById($this->id)) {
            return false;
        }

        return $item['id'] > 0;
    }

    public function getId(): int
    {
        return $this->id;
    }
}

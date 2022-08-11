<?php

namespace App\Domain\Repository;

use JetBrains\PhpStorm\ArrayShape;

class Repository
{
    #[ArrayShape(['id' => "int", 'name' => "string"])]
    public function getById(int $id): array
    {
        return [
            'id' => $id,
            'name' => 'test'
        ];
    }
}

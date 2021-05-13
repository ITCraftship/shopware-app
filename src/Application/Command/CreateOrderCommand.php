<?php

declare(strict_types=1);

namespace App\Application\Command;

final class CreateOrderCommand
{
    public function __construct(
        public string $id,
        public string $number,
        public array $items,
    ) { }
}

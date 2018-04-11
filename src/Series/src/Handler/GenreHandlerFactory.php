<?php

declare(strict_types=1);

namespace Series\Handler;

use Psr\Container\ContainerInterface;

class GenreHandlerFactory
{
    public function __invoke(ContainerInterface $container) : GenreHandler
    {
        return new GenreHandler();
    }
}

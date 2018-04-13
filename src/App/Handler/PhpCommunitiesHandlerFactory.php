<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;

class PhpCommunitiesHandlerFactory
{
    public function __invoke(ContainerInterface $container) : PhpCommunitiesHandler
    {
        return new PhpCommunitiesHandler();
    }
}

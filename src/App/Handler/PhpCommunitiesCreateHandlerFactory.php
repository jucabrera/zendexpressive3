<?php

declare(strict_types=1);

namespace App\Handler;

use Psr\Container\ContainerInterface;

class PhpCommunitiesCreateHandlerFactory
{
    public function __invoke(ContainerInterface $container) : PhpCommunitiesCreateHandler
    {

        
        
        return new PhpCommunitiesCreateHandler();
    }
}

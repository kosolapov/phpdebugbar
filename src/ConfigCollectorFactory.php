<?php

namespace PhpMiddleware\PhpDebugBar;

use DebugBar\DataCollector\ConfigCollector;
use Interop\Container\ContainerInterface;

final class ConfigCollectorFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $data = $container->get('config');

        return new ConfigCollector($data, 'Config');
    }
}

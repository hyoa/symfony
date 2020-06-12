<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;


use Symfony\Component\Messenger\DataCollector\MessengerDataCollector;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('data_collector.messenger', MessengerDataCollector::class)
            ->tag(
                'data_collector',
                [
                    'template' => '@WebProfiler/Collector/messenger.html.twig',
                    'id' => 'messenger',
                    'priority' => 100,
                ]
            )
    ;
};

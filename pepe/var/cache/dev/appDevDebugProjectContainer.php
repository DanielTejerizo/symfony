<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLuxghfx\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLuxghfx/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerLuxghfx.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerLuxghfx\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerLuxghfx\appDevDebugProjectContainer([
    'container.build_hash' => 'Luxghfx',
    'container.build_id' => '5d8fda2a',
    'container.build_time' => 1700670383,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLuxghfx');

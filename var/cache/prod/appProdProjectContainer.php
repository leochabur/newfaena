<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSxxscnh\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSxxscnh/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerSxxscnh.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerSxxscnh\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerSxxscnh\appProdProjectContainer([
    'container.build_hash' => 'Sxxscnh',
    'container.build_id' => 'c1b207d1',
    'container.build_time' => 1585485510,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSxxscnh');

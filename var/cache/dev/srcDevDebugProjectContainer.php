<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPd1AMvG\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPd1AMvG/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPd1AMvG.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPd1AMvG\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerPd1AMvG\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Pd1AMvG',
    'container.build_id' => 'a46b86c4',
    'container.build_time' => 1520721825,
));

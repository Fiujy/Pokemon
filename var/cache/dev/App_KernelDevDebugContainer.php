<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXEJOEbp\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXEJOEbp/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXEJOEbp.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXEJOEbp\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXEJOEbp\App_KernelDevDebugContainer([
    'container.build_hash' => 'XEJOEbp',
    'container.build_id' => '24ece582',
    'container.build_time' => 1729867556,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXEJOEbp');
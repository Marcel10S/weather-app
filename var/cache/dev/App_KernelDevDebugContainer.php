<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZs6BS0M\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZs6BS0M/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZs6BS0M.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZs6BS0M\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZs6BS0M\App_KernelDevDebugContainer([
    'container.build_hash' => 'Zs6BS0M',
    'container.build_id' => '28a0c802',
    'container.build_time' => 1659879167,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZs6BS0M');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE5V7Wm8\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE5V7Wm8/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE5V7Wm8.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE5V7Wm8\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE5V7Wm8\App_KernelDevDebugContainer([
    'container.build_hash' => 'E5V7Wm8',
    'container.build_id' => '3679698c',
    'container.build_time' => 1582811856,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE5V7Wm8');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTqWEqEh\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTqWEqEh/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTqWEqEh.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTqWEqEh\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerTqWEqEh\App_KernelDevDebugContainer([
    'container.build_hash' => 'TqWEqEh',
    'container.build_id' => 'eee2b36d',
    'container.build_time' => 1712585635,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTqWEqEh');
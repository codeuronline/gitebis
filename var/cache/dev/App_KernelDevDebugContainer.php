<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7DgftxU\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7DgftxU/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7DgftxU.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7DgftxU\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container7DgftxU\App_KernelDevDebugContainer([
    'container.build_hash' => '7DgftxU',
    'container.build_id' => 'c68a9bb9',
    'container.build_time' => 1650632097,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7DgftxU');

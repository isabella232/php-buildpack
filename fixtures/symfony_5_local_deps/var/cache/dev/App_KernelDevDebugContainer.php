<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFelbUiK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFelbUiK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFelbUiK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFelbUiK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFelbUiK\App_KernelDevDebugContainer([
    'container.build_hash' => 'FelbUiK',
    'container.build_id' => '801b7d97',
    'container.build_time' => 1603985970,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFelbUiK');

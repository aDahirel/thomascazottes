<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3vvVBHQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3vvVBHQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3vvVBHQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3vvVBHQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container3vvVBHQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '3vvVBHQ',
    'container.build_id' => '2ae9ea9e',
    'container.build_time' => 1569876776,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3vvVBHQ');

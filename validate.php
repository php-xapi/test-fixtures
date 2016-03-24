<?php

include __DIR__.'/vendor/autoload.php';

foreach (glob(__DIR__.'/src/*.php') as $file) {
    $className = 'Xabbuh\XApi\DataFixtures\\'.substr(basename($file), 0, -4);

    foreach (get_class_methods($className) as $method) {
        call_user_func(array($className, $method));
    }
}

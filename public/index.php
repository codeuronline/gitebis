<?php

// use App\Kernel;

// require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

// return function (array $context) {
//     return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
// };
require_once 'models.php';
$post= get_all_posts();
require_once 'templates/list.php';
?>
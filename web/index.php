<?php
require_once __DIR__.'/../app/bootstrap_cache.php';
require_once __DIR__.'/../app/AppCache.php';

use Symfony\Component\HttpFoundation\Request;

$kernel = new AppCache(new AppKernel('prod', true));
$kernel->handle(Request::createFromGlobals())->send();

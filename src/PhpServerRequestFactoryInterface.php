<?php

declare(strict_types=1);

namespace Interop\Http;

use Psr\Http\Message\ServerRequestInterface;

interface PhpServerRequestFactoryInterface
{
    function createServerRequestFromGlobals(array $server = null, array $get = null, array $post = null, array $cookies = null, array $files = null): ServerRequestInterface;
}
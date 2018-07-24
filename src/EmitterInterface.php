<?php

declare(strict_types=1);

namespace Interop\Emitter;

use Psr\Http\Message\ResponseInterface;

interface EmitterInterface
{
    function emit(ResponseInterface $res): void;
}
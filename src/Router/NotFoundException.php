<?php declare(strict_types = 1);

namespace Apitin\Router;

class NotFoundException extends RouterException
{
    public function __construct($message = "", $code = 0, ?\Throwable $previous = null)
    {
        parent::__construct($message, 404, $previous);
    }
}
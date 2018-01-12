<?php

namespace Directus\Exception;

class BadRequestException extends Exception
{
    const ERROR_CODE = 2;

    public function __construct($message = '')
    {
        parent::__construct($message, static::ERROR_CODE);
    }
}

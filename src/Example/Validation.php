<?php

namespace Src\Example;

use Exception;

class Validation
{
    public static function minLength(?string $value = '', int $length = 3): void
    {
        if (!$value || strlen($value) < $length) {
            throw new Exception('invalid qty characters');
        }
    }
}

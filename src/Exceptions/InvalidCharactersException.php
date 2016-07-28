<?php

namespace PragmaRX\Google2FAPhp\Exceptions;

use Exception;

class InvalidCharactersException extends Exception
{
    protected $message = 'Invalid characters in the base32 string.';
}

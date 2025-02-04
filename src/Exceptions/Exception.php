<?php

namespace Netesy\Support\Exceptions;

use Exception as PHPException;

class Exception extends PHPException
{

    public function append($message)
    {
        $this->message .= $message;
    }
}

<?php

namespace Bhavinjr\Ekomi\Errors;

class BadRequestError extends Error
{
    public function __construct($message, $code, $httpStatusCode, $field = null)
    {
        parent::__construct($message, $code, $httpStatusCode);

        $this->field = $field;
    }

    public function getField()
    {
        return $this->field;
    }
}
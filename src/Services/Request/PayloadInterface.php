<?php

namespace Bhavinjr\Ekomi\Services\Request;

interface PayloadInterface
{
    /**
     * @return String
     */
    public function getBaseName();

    /**
     * @return Array
     */
    public function getPayload();

    /**
     * @return [String generate query url]
     */
    public function getQuery();


}
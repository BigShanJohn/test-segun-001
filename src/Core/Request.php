<?php

namespace App\Core;

use App\Core\RequestInterface;
use App\Core\Formatter;

class Request extends Formatter implements RequestInterface
{
    function __construct()
    {
        $this->bootstrapSelf();
    }

    private function bootstrapSelf(): void
    {
        foreach ($_SERVER as $key => $value) {
            $this->{$this->toCamelCase($key)} = $value;
        }
    }


    public function getBody(): ?array
    {
        if ($this->requestMethod === "GET") {
            return NULL;
        }

        if ($this->requestMethod == "POST") {
            $body = array();
            foreach ($_POST as $key => $value) {
                $body[$key] = filter_input(INPUT_POST, $key, FILTER_SANITIZE_SPECIAL_CHARS);
            }

            return $body;
        }
    }
}

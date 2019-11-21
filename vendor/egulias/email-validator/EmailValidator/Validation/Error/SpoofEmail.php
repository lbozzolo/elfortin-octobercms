<?php

namespace Egulias\EmailValidator\Validation\Error;

use Egulias\EmailValidator\Exception\InvalidEmail;

class SpoofEmail extends InvalidEmail
{
    const CODE = 998;
    const REASON = "The mail contains mixed UTF8 chars that makes it suspicious";
}

<?php

namespace Egulias\EmailValidator\Warning;

class NoDNSMXRecord extends Warning
{
    const CODE = 6;

    public function __construct()
    {
        $this->message = 'No MX DSN record was found for this mail';
        $this->rfcNumber = 5321;
    }
}

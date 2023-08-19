<?php

namespace App\DTO;


class AddressChangeDTO
{
    public $line1;
    public $line2;
    public $city;
    public $pincode;
    public function __construct($line1, $line2, $city, $pincode)
    {
        $this->line1 = $line1;
        $this->line2 = $line2;
        $this->city = $city;
        $this->pincode = $pincode;
    }
}

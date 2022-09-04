<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Support\LaravelMyanmarTools;

use CyberWings\MyanmarPhoneNumber;
use CyberWings\Sanitizer;
use Exception;
use Illuminate\Support\Str;

class PhoneNumber
{
    protected string $phoneNo;

    public function __construct(string $phoneNo)
    {
        $phoneNo = $this->convertNumberFromMyanmarToEnglish($phoneNo);
        $phoneNo = (new Sanitizer())->clean($phoneNo);
        if (!Str::isMyanmarPhoneNumber($phoneNo)) {
            throw new Exception('Invalid Myanmar Phone Number');
        }
        $phoneNo = (new MyanmarPhoneNumber())->add_prefix($phoneNo);
        $this->phoneNo = Str::substr($phoneNo, 3);
    }

    public function normalizeMyanmarPhoneNumber(string $prefix): string
    {
        return $prefix . $this->phoneNo;
    }

    protected function convertNumberFromMyanmarToEnglish(string $str): string
    {
        $myanmarNumber = ['၀', '၁', '၂', '၃', '၄', '၅', '၆', '၇', '၈', '၉', 'ဝ', 'ရ'];
        $englishNumber = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '7'];
        return str_replace($myanmarNumber, $englishNumber, $str);
    }
}

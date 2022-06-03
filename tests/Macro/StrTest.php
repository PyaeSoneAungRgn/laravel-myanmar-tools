<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests\Macro;

use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;
use Illuminate\Support\Str;

class StrTest extends TestCase
{
    const UNICODE = 'unicode';
    const ZAWGYI = 'zawgyi';

    const UNICODE_STRING = 'မြန်မာပြည်';
    const ZAWGYI_STRING = 'ျမန္မာျပည္';

    const MPT = 'mpt';
    const OOREDOO = 'ooredoo';
    const TELENOR = 'telenor';
    const MEC = 'mec';
    const MYTEL = 'mytel';

    const MPT_PHONE_NO = '09250000000';
    const OOREDOO_PHONE_NO = '09970000000';
    const TELENOR_PHONE_NO = '09790000000';
    const MEC_PHONE_NO = '0930000000';
    const MYTEL_PHONE_NO = '09690000000';

    /** @test */
    public function it_can_check_unicode_font()
    {
        $this->assertTrue(Str::isUnicodeFont(static::UNICODE_STRING));
    }

    /** @test */
    public function it_can_check_zawgyi_font()
    {
        $this->assertTrue(Str::isZawgyiFont(static::ZAWGYI_STRING));
    }

    /** @test */
    public function it_can_detect_myanmar_font()
    {
        $this->assertEquals(static::UNICODE, Str::detectMyanmarFont(static::UNICODE_STRING));
        $this->assertEquals(static::ZAWGYI, Str::detectMyanmarFont(static::ZAWGYI_STRING));
    }

    /** @test */
    public function it_can_convert_zawgyi_to_unicode()
    {
        $this->assertEquals(static::UNICODE_STRING, Str::zgToUni(static::ZAWGYI_STRING));
    }

    /** @test */
    public function it_can_convert_unicode_to_zawgyi()
    {
        $this->assertEquals(static::ZAWGYI_STRING, Str::uniToZg(static::UNICODE_STRING));
    }

    /** @test */
    public function it_can_check_myanmar_phone_number()
    {
        $this->assertTrue(Str::isMyanmarPhoneNumber(static::MPT_PHONE_NO));
        $this->assertTrue(Str::isMyanmarPhoneNumber(static::OOREDOO_PHONE_NO));
        $this->assertTrue(Str::isMyanmarPhoneNumber(static::TELENOR_PHONE_NO));
        $this->assertTrue(Str::isMyanmarPhoneNumber(static::MEC_PHONE_NO));
        $this->assertTrue(Str::isMyanmarPhoneNumber(static::MYTEL_PHONE_NO));
    }

    /** @test */
    public function it_can_check_mpt_phone_number()
    {
        $this->assertTrue(Str::isMpt(static::MPT_PHONE_NO));
    }

    /** @test */
    public function it_can_check_ooredoo_phone_number()
    {
        $this->assertTrue(Str::isOoredoo(static::OOREDOO_PHONE_NO));
    }

    /** @test */
    public function it_can_check_telenor_phone_number()
    {
        $this->assertTrue(Str::isTelenor(static::TELENOR_PHONE_NO));
    }

    /** @test */
    public function it_can_check_mec_phone_number()
    {
        $this->assertTrue(Str::isMec(static::MEC_PHONE_NO));
    }

    /** @test */
    public function it_can_check_mytel_phone_number()
    {
        $this->assertTrue(Str::isMytel(static::MYTEL_PHONE_NO));
    }

    /** @test */
    public function it_can_get_telecom_name()
    {
        $this->assertEquals(static::MPT, Str::telecomName(static::MPT_PHONE_NO));
        $this->assertEquals(static::OOREDOO, Str::telecomName(static::OOREDOO_PHONE_NO));
        $this->assertEquals(static::TELENOR, Str::telecomName(static::TELENOR_PHONE_NO));
        $this->assertEquals(static::MEC, Str::telecomName(static::MEC_PHONE_NO));
        $this->assertEquals(static::MYTEL, Str::telecomName(static::MYTEL_PHONE_NO));
    }
}
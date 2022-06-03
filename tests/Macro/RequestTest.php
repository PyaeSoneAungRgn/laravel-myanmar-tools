<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests\Macro;

use Illuminate\Http\Request;
use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;

class RequestTest extends TestCase
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

    private function createRequest(array $payload = []): Request
    {
        return new Request($payload);
    }

    /** @test */
    public function it_can_check_unicode_font()
    {
        $request = $this->createRequest([
            'name' => static::UNICODE_STRING,
        ]);
        $this->assertTrue($request->isUnicodeFont('name'));
    }

    /** @test */
    public function it_can_check_zawgyi_font()
    {
        $request = $this->createRequest([
            'name' => static::ZAWGYI_STRING,
        ]);
        $this->assertTrue($request->isZawgyiFont('name'));
    }

    /** @test */
    public function it_can_detect_myanmar_font()
    {
        $request = $this->createRequest([
            'name_uni' => static::UNICODE_STRING,
            'name_zg' => static::ZAWGYI_STRING,
        ]);
        $this->assertEquals(static::UNICODE, $request->detectMyanmarFont('name_uni'));
        $this->assertEquals(static::ZAWGYI, $request->detectMyanmarFont('name_zg'));
    }

    /** @test */
    public function it_can_convert_zawgyi_to_unicode()
    {
        $request = $this->createRequest([
            'name' => static::ZAWGYI_STRING,
        ]);
        $this->assertEquals(static::UNICODE_STRING, $request->zgToUni('name'));
    }

    /** @test */
    public function it_can_convert_unicode_to_zawgyi()
    {
        $request = $this->createRequest([
            'name' => static::UNICODE_STRING,
        ]);
        $this->assertEquals(static::ZAWGYI_STRING, $request->uniToZg('name'));
    }

    /** @test */
    public function it_can_check_myanmar_phone_number()
    {
        $request = $this->createRequest([
            'mpt' => static::MPT_PHONE_NO,
            'ooredoo' => static::OOREDOO_PHONE_NO,
            'telenor' => static::TELENOR_PHONE_NO,
            'mec' => static::MEC_PHONE_NO,
            'mytel' => static::MYTEL_PHONE_NO,
        ]);
        $this->assertTrue($request->isMyanmarPhoneNumber('mpt'));
        $this->assertTrue($request->isMyanmarPhoneNumber('ooredoo'));
        $this->assertTrue($request->isMyanmarPhoneNumber('telenor'));
        $this->assertTrue($request->isMyanmarPhoneNumber('mec'));
        $this->assertTrue($request->isMyanmarPhoneNumber('mytel'));
    }

    /** @test */
    public function it_can_check_mpt_phone_number()
    {
        $request = $this->createRequest([
            'phone' => static::MPT_PHONE_NO,
        ]);
        $this->assertTrue($request->isMpt('phone'));
    }

    /** @test */
    public function it_can_check_ooredoo_phone_number()
    {
        $request = $this->createRequest([
            'phone' => static::OOREDOO_PHONE_NO,
        ]);
        $this->assertTrue($request->isOoredoo('phone'));
    }

    /** @test */
    public function it_can_check_telenor_phone_number()
    {
        $request = $this->createRequest([
            'phone' => static::TELENOR_PHONE_NO,
        ]);
        $this->assertTrue($request->isTelenor('phone'));
    }

    /** @test */
    public function it_can_check_mec_phone_number()
    {
        $request = $this->createRequest([
            'phone' => static::MEC_PHONE_NO,
        ]);
        $this->assertTrue($request->isMec('phone'));
    }

    /** @test */
    public function it_can_check_mytel_phone_number()
    {
        $request = $this->createRequest([
            'phone' => static::MYTEL_PHONE_NO,
        ]);
        $this->assertTrue($request->isMytel('phone'));
    }

    /** @test */
    public function it_can_get_telecom_name()
    {
        $request = $this->createRequest([
            'mpt' => static::MPT_PHONE_NO,
            'ooredoo' => static::OOREDOO_PHONE_NO,
            'telenor' => static::TELENOR_PHONE_NO,
            'mec' => static::MEC_PHONE_NO,
            'mytel' => static::MYTEL_PHONE_NO,
        ]);
        $this->assertEquals(static::MPT, $request->telecomName('mpt'));
        $this->assertEquals(static::OOREDOO, $request->telecomName('ooredoo'));
        $this->assertEquals(static::TELENOR, $request->telecomName('telenor'));
        $this->assertEquals(static::MEC, $request->telecomName('mec'));
        $this->assertEquals(static::MYTEL, $request->telecomName('mytel'));
    }
}
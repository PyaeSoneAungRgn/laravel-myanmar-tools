<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests\Macro;

use Illuminate\Support\Str;
use LaravelMyanmarTools\PhoneNumber\Enums\Network;
use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;

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

    const NRC_EN = '12/OUKAMA(N)123456';

    const NRC_MM = '၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆';

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
        $this->assertEquals(Network::GSM->getValue(), Str::telecomNetworkType(static::MPT_PHONE_NO));
    }

    /** @test */
    public function it_can_get_telecom_network_type()
    {
        $this->assertEquals(static::MPT, Str::telecomName(static::MPT_PHONE_NO));
        $this->assertEquals(static::OOREDOO, Str::telecomName(static::OOREDOO_PHONE_NO));
        $this->assertEquals(static::TELENOR, Str::telecomName(static::TELENOR_PHONE_NO));
        $this->assertEquals(static::MEC, Str::telecomName(static::MEC_PHONE_NO));
        $this->assertEquals(static::MYTEL, Str::telecomName(static::MYTEL_PHONE_NO));
    }

    /** @test */
    public function it_can_normalize_myanmar_phone_number()
    {
        $this->assertEquals('09250000000', Str::normalizeMyanmarPhoneNumber('(၀၉)၂၅၀၀၀၀၀၀၀'));
        $this->assertEquals('09250000000', Str::normalizeMyanmarPhoneNumber('၀၉-၂၅၀၀၀၀၀၀၀'));
        $this->assertEquals('09250000000', Str::normalizeMyanmarPhoneNumber('+၉၅၉၂၅၀၀၀၀၀၀၀'));
        $this->assertEquals('959250707070', Str::normalizeMyanmarPhoneNumber('09 ၂၅ဝရဝရဝရဝ', '959'));
    }

    /** @test */
    public function it_can_check_nrc()
    {
        $this->assertTrue(Str::isNrc(static::NRC_EN));
        $this->assertTrue(Str::isNrc(static::NRC_MM));
    }

    /** @test */
    public function it_can_normalize_nrc()
    {
        $this->assertEquals(Str::normalizeNrc('12/OuKaMa(Naing)123456'), static::NRC_EN);
        $this->assertEquals(Str::normalizeNrc('၁၂/ဥကမ(နိုင်)၁၂၃၄၅၆', 'mm'), static::NRC_MM);
    }

    /** @test */
    public function it_can_extract_myanmar_phone_number()
    {
        $this->assertEquals([static::MPT_PHONE_NO, static::OOREDOO_PHONE_NO], Str::extractMyanmarPhoneNumber('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်များမှာ ၀၉၂၅၀၀၀၀၀၀၀ နှင့် ၀၉၉၇၀၀၀၀၀၀၀ တို့ဖြစ်ပါသည်။'));
    }

    /** @test */
    public function it_can_extract_mpt_phone_number()
    {
        $this->assertEquals([static::MPT_PHONE_NO], Str::extractMpt('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09250000000 ဖြစ်ပါသည်။'));
    }

    /** @test */
    public function it_can_extract_ooredoo_phone_number()
    {
        $this->assertEquals([static::OOREDOO_PHONE_NO], Str::extractOoredoo('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09970000000 ဖြစ်ပါသည်။'));
    }

    /** @test */
    public function it_can_extract_telenor_phone_number()
    {
        $this->assertEquals([static::TELENOR_PHONE_NO], Str::extractTelenor('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09790000000 ဖြစ်ပါသည်။'));
    }

    /** @test */
    public function it_can_extract_mec_phone_number()
    {
        $this->assertEquals([static::MEC_PHONE_NO], Str::extractMec('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 0930000000 ဖြစ်ပါသည်။'));
    }

    /** @test */
    public function it_can_extract_mytel_phone_number()
    {
        $this->assertEquals([static::MYTEL_PHONE_NO], Str::extractMytel('မောင်မောင်ရဲ့ ဖုန်းနံပါတ်မှာ 09690000000 ဖြစ်ပါသည်။'));
    }
}

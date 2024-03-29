<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests\Extend;

use Illuminate\Support\Facades\Validator;
use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;

class ValidatorTest extends TestCase
{
    /** @test */
    public function it_can_validate_myanmar_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '09250000000'], [
            'phone' => 'myanmarPhoneNumber',
        ])->passes());

        $this->assertTrue(Validator::make(['phone' => '09250000000'], [
            'phone' => 'myanmar_phone_number',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_mpt_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '09250000000'], [
            'phone' => 'mpt',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_ooredoo_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '09970000000'], [
            'phone' => 'ooredoo',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_telenor_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '09790000000'], [
            'phone' => 'telenor',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_mec_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '0930000000'], [
            'phone' => 'mec',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_mytel_phone_number()
    {
        $this->assertTrue(Validator::make(['phone' => '09690000000'], [
            'phone' => 'mytel',
        ])->passes());
    }

    /** @test */
    public function it_can_validate_nrc()
    {
        $this->assertTrue(Validator::make(['nrc' => '12/OUKAMA(N)123456'], [
            'nrc' => 'nrc',
        ])->passes());
    }
}

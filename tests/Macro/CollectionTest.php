<?php

namespace PyaeSoneAung\LaravelMyanmarTools\Tests\Macro;

use PyaeSoneAung\LaravelMyanmarTools\Tests\TestCase;

class CollectionTest extends TestCase
{
    /** @test */
    public function it_will_return_only_myanmar_phone_number()
    {
        $data = ['09250000000', 'abc'];
        $this->assertEquals(['09250000000'], collect($data)->whereMyanmarPhoneNumber()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => 'abc']
        ];
        $this->assertEquals([['phone' => '09250000000']], collect($data)->whereMyanmarPhoneNumber('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => 'abc']],
        ];
        $this->assertEquals([['user' => ['phone' => '09250000000']]], collect($data)->whereMyanmarPhoneNumber('user.phone')->toArray());
    }

    /** @test */
    public function it_will_return_only_mpt_phone_number()
    {
        $data = ['09250000000', '09970000000'];
        $this->assertEquals(['09250000000'], collect($data)->whereMpt()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => '09970000000']
        ];
        $this->assertEquals([['phone' => '09250000000']], collect($data)->whereMpt('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => '09970000000']],
        ];
        $this->assertEquals([['user' => ['phone' => '09250000000']]], collect($data)->whereMpt('user.phone')->toArray());
    }

    /** @test */
    public function it_will_return_only_ooredoo_phone_number()
    {
        $data = ['09250000000', '09970000000'];
        $this->assertEquals(['09970000000'], collect($data)->whereOoredoo()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => '09970000000']
        ];
        $this->assertEquals([['phone' => '09970000000']], collect($data)->whereOoredoo('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => '09970000000']],
        ];
        $this->assertEquals([['user' => ['phone' => '09970000000']]], collect($data)->whereOoredoo('user.phone')->toArray());
    }

    /** @test */
    public function it_will_return_only_telenor_phone_number()
    {
        $data = ['09250000000', '09790000000'];
        $this->assertEquals(['09790000000'], collect($data)->whereTelenor()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => '09790000000']
        ];
        $this->assertEquals([['phone' => '09790000000']], collect($data)->whereTelenor('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => '09790000000']],
        ];
        $this->assertEquals([['user' => ['phone' => '09790000000']]], collect($data)->whereTelenor('user.phone')->toArray());
    }

    /** @test */
    public function it_will_return_only_mec_phone_number()
    {
        $data = ['09250000000', '0930000000'];
        $this->assertEquals(['0930000000'], collect($data)->whereMec()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => '0930000000']
        ];
        $this->assertEquals([['phone' => '0930000000']], collect($data)->whereMec('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => '0930000000']],
        ];
        $this->assertEquals([['user' => ['phone' => '0930000000']]], collect($data)->whereMec('user.phone')->toArray());
    }

    /** @test */
    public function it_will_return_only_mytel_phone_number()
    {
        $data = ['09250000000', '09690000000'];
        $this->assertEquals(['09690000000'], collect($data)->whereMytel()->toArray());

        $data = [
            ['phone' => '09250000000'],
            ['phone' => '09690000000']
        ];
        $this->assertEquals([['phone' => '09690000000']], collect($data)->whereMytel('phone')->toArray());

        $data = [
            ['user' => ['phone' => '09250000000']],
            ['user' => ['phone' => '09690000000']],
        ];
        $this->assertEquals([['user' => ['phone' => '09690000000']]], collect($data)->whereMytel('user.phone')->toArray());
    }

    /** @test */
    public function it_will_convert_unicode_to_zawgyi()
    {
        $data = ['??????????????????????????????'];
        $this->assertEquals(['??????????????????????????????'], collect($data)->uniToZg()->toArray());

        $data = [
            ['name' => '??????????????????????????????']
        ];
        $this->assertEquals([['name' => '??????????????????????????????']], collect($data)->uniToZg('name')->toArray());

        $data = [
            ['user' => ['name' => '??????????????????????????????']]
        ];
        $this->assertEquals([['user' => ['name' => '??????????????????????????????']]], collect($data)->uniToZg('user.name')->toArray());
    }

    /** @test */
    public function it_will_convert_zawgyi_to_unicode()
    {
        $data = ['??????????????????????????????'];
        $this->assertEquals(['??????????????????????????????'], collect($data)->zgToUni()->toArray());

        $data = [
            ['name' => '??????????????????????????????']
        ];
        $this->assertEquals([['name' => '??????????????????????????????']], collect($data)->zgToUni('name')->toArray());

        $data = [
            ['user' => ['name' => '??????????????????????????????']]
        ];
        $this->assertEquals([['user' => ['name' => '??????????????????????????????']]], collect($data)->zgToUni('user.name')->toArray());
    }
}

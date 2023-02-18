<?php

use Illuminate\Support\Carbon;

it('can check independence day', function () {
    expect(Carbon::parse('2023-01-04')->isIndependenceDay())->toBeTrue();
    expect(Carbon::parse('1947-01-04')->isIndependenceDay())->toBeFalse();
});

it('can check union day', function () {
    expect(Carbon::parse('2023-02-12')->isUnionDay())->toBeTrue();
    expect(Carbon::parse('1946-02-12')->isUnionDay())->toBeFalse();
});

it('can check peasants\' day', function () {
    expect(Carbon::parse('2023-03-02')->isPeasantsDay())->toBeTrue();
    expect(Carbon::parse('1961-03-02')->isPeasantsDay())->toBeFalse();
});

it('can check labour day', function () {
    expect(Carbon::parse('2023-05-01')->isLabourDay())->toBeTrue();
    expect(Carbon::parse('2023-05-02')->isLabourDay())->toBeFalse();
});

it('can check martyr\'s day', function () {
    expect(Carbon::parse('2023-07-19')->isMartyrsDay())->toBeTrue();
    expect(Carbon::parse('1946-07-19')->isMartyrsDay())->toBeFalse();
});

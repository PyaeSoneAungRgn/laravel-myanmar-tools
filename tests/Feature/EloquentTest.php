<?php

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

it('can filter myanmar phone number', function () {
    expect(
        users()->query()->whereMyanmarPhoneNumber('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereMyanmarPhoneNumber('phone')->getBindings()
    )->toBe([Telecom::ALL->getRegex()]);
});

it('can filter mpt number', function () {
    expect(
        users()->query()->whereMpt('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereMpt('phone')->getBindings()
    )->toBe([Telecom::MPT->getRegex()]);
});

it('can filter ooredoo number', function () {
    expect(
        users()->query()->whereOoredoo('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereOoredoo('phone')->getBindings()
    )->toBe([Telecom::OOREDOO->getRegex()]);
});

it('can filter telenor number', function () {
    expect(
        users()->query()->whereTelenor('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereTelenor('phone')->getBindings()
    )->toBe([Telecom::TELENOR->getRegex()]);
});

it('can filter mec number', function () {
    expect(
        users()->query()->whereMec('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereMec('phone')->getBindings()
    )->toBe([Telecom::MEC->getRegex()]);
});

it('can filter mytel number', function () {
    expect(
        users()->query()->whereMytel('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        users()->query()->whereMytel('phone')->getBindings()
    )->toBe([Telecom::MYTEL->getRegex()]);
});

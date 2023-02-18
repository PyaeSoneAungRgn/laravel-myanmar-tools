<?php

use LaravelMyanmarTools\PhoneNumber\Enums\Telecom;

it('can filter myanmar phone number', function () {
    expect(
        usersTbl()->whereMyanmarPhoneNumber('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereMyanmarPhoneNumber('phone')->getBindings()
    )->toBe([Telecom::ALL->getRegex()]);
});

it('can filter mpt number', function () {
    expect(
        usersTbl()->whereMpt('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereMpt('phone')->getBindings()
    )->toBe([Telecom::MPT->getRegex()]);
});

it('can filter ooredoo number', function () {
    expect(
        usersTbl()->whereOoredoo('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereOoredoo('phone')->getBindings()
    )->toBe([Telecom::OOREDOO->getRegex()]);
});

it('can filter telenor number', function () {
    expect(
        usersTbl()->whereTelenor('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereTelenor('phone')->getBindings()
    )->toBe([Telecom::TELENOR->getRegex()]);
});

it('can filter mec number', function () {
    expect(
        usersTbl()->whereMec('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereMec('phone')->getBindings()
    )->toBe([Telecom::MEC->getRegex()]);
});

it('can filter mytel number', function () {
    expect(
        usersTbl()->whereMytel('phone')->toSql()
    )->toBe('select * from `users` where `phone` REGEXP ?');

    expect(
        usersTbl()->whereMytel('phone')->getBindings()
    )->toBe([Telecom::MYTEL->getRegex()]);
});

<?php

namespace Kbarut\Telecommunication\Tests;

use Kbarut\Telecommunication\LandlineChecker;

it('empty input', function () {
	
	$landlineChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $landlineChecker->validate('');
	
	expect($res)->toBeFalse();
    
});

it('wrong characters count', function () {
	
    	$landlineChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $landlineChecker->validate('020123456789');
	
	expect($res)->toBeFalse();
 
});

it('wrong characters types', function () {

    	$landlineChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $landlineChecker->validate('02012A');
	
	expect($res)->toBeFalse();

});

it('assignable no country code german landline num', function () {

    $landlineChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $landlineChecker->validate('02012345678');
	
	expect($res)->toBeTrue();

});

it('assignable german landline num with country code "0049"', function () {

   	$mobileChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $mobileChecker->validate('00492012345678');
	
	expect($res)->toBeTrue();
	
});

it('assignable german landline num with country code "+49"', function () {

    	$mobileChecker = Mockery::mock(LandlineChecker::class);
	
	$res = $mobileChecker->validate('+492012345678');
	
	expect($res)->toBeTrue();
});

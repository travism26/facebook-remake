<?php
$I = new FunctionalTester($scenario);
$I->am('guest');
$I->wantTo('sign up for the website');

$I->amOnPage('/');
$I->click('Sign Up!');

$I->fillField('username', 'JohnDoe');
$I->fillField('email', 'john@example.com');
$I->fillField('password', 'demo');
$I->fillField('password_confirmation', 'demo');
$I->click('Sign up');

$I->seeCurrentUrlEquals('');
$I->see('Welcome to larabook');

$I->seeRecord('users', [
    'username' => 'JohnDoe',
    'email'    => 'john@example.com'
]);

$I->assertTrue(Auth::Check());
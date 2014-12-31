<?php
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('sign up for a larabook account');
$I->amOnPage('/');
$I->click('Register');
$I->seeCurrentUrlEquals('/register');
$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password_confirmation:', 'demo');
$I->click('Sign up');
$I->seeCurrentUrlEquals('');
$I->see('Welcome to Larabook!');
$I->seeRecord('users', [
    'username' => 'JohnDoe',
    'email' => 'john@example.com'
]);
$I->assertTrue(Auth::check(), 'The user is logged in');
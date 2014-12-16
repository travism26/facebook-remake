<?php 
$I = new FunctionalTester($scenario);
$I->am('a Larabook');
$I->wantTo('I want  memberto post status to my profile.');

$I->signIn();

$I->amOnPage('statuses');

$I->postAStatus('My first post!');

$I->seeCurrentUrlEquals('/statuses');
$I->see('My first post!');

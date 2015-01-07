<?php 
$I = new FunctionalTester($scenario);

$I->am('a Larabook user.');
$I->wantTo('follow other Larabook users.');

//setup
$I->haveAnAccount(['username' => 'OtherUser']);
$I->signIn();

//action
$I->click('Browse Users');
$I->click('OtherUser');

$I->seeCurrentUrlEquals('/@OtherUser');
//$I->see('OtherUser');

$I->click('Follow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
//$I->see('You are following OtherUser');
$I->see('Unfollow OtherUser');

$I->click('Unfollow OtherUser');
$I->seeCurrentUrlEquals('/@OtherUser');
$I->see('Follow OtherUser');

//expectations


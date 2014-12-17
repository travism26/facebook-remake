<?php


use Larabook\Statuses\StatusRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class StatusRepositoryTest extends \Codeception\TestCase\Test {

    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected function _before()
    {
        $this->repo = new StatusRepository;

        //if we need to resolve something from the IOC container
        //we can just do:
        //$this->tester->grabService('Larabook\Statuses\StatusRepository');
    }

    protected function _after()
    {

    }

    /** @test */
    public function it_gets_all_status_for_a_user()
    {
        //given i have two users
        $user = TestDummy::times(2)->create('Larabook\Users\User');
        //and status for both of them
        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $user[0]->id,
            'body'    => 'My status'
        ]);

        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id' => $user[1]->id,
            'body'    => 'His status'
        ]);

        //when i fetch statues for one user
        $statusesForUser = $this->repo->getAllForUser($user[0]);

        //then i should receive only the relevant ones

        $this->assertCount(2, $statusesForUser);
        $this->assertEquals('My status', $statusesForUser[0]->body);
        $this->assertEquals('My status', $statusesForUser[1]->body);
    }
    /** @test */
    public function it_saves_a_status_for_a_user()
    {
        //given i have a unsaved status
        $status = TestDummy::create('Larabook\Statuses\Status', [
            'user_id' => null,
            'body'    => 'My status'
        ]);
        //and an existing user
        $user = TestDummy::create('Larabook\Users\User');
        // when I try to persist this status
        $savedStatus = $this->repo->save($status, $user->id);
        //then it should be saved
        $this->tester->seeRecord('statuses', [
            'body' => 'My status'
        ]);

        //and the status should have the correct user_id
        $this->assertEquals($user->id, $savedStatus->user_id);
    }
}
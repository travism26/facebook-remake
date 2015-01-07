<?php


use Larabook\Users\UserRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class UserRepositoryTest extends \Codeception\TestCase\Test {

    /**
     * @var \IntegrationTester
     */
    protected $tester;
    protected $repo;

    protected function _before()
    {
        $this->repo = new UserRepository();

        //if we need to resolve something from the IOC container
        //we can just do:
        //$this->tester->grabService('Larabook\Users\UserRepository');
    }

    /** @test */

    public function it_paginates_all_users()
    {
        TestDummy::times(4)->create('Larabook\Users\User');

        $results = $this->repo->getPaginated(2);

        $this->assertCount(2, $results);


        /*$results->getCollection();
        $results->getPerPage(); // 2
        $results->getItems();*/

    }

    /**
     * @test
     */
    public function it_finds_a_user_statuses_by_their_username()
    {
        //given
        $statuses = TestDummy::times(3)->create('Larabook\Statuses\Status');
        $username = $statuses[0]->user->username;

        //when
        $user = $this->repo->findByUsername($username);

        //then
        $this->assertEquals($username, $user->username);
        $this->assertCount(3, $user->statuses);
    }

    /** @test */
    public function it_follows_another_user()
    {
        //given I have two users

        $users = TestDummy::times(2)->create('Larabook\Users\User');

        // and one user follows another user
        
    }
    function _after()
    {

    }

}
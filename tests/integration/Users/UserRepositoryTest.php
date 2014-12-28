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
    protected function _after()
    {

    }

}
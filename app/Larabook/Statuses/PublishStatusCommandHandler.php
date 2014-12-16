<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-16
 * Time: 6:11 PM
 */

namespace Larabook\Statuses;


use Laracasts\Commander\CommandHandler;
use Laracasts\Commander\Events\DispatchableTrait;

class PublishStatusCommandHandler implements CommandHandler {
    use DispatchableTrait;
    protected $statusRepository;

    public function __construct(StatusRepository $statusRepository)
    {
        $this->statusRepository = $statusRepository;
    }
    /**
     * Handle the command
     *
     * @param $command
     * @return mixed
     */
    public function handle($command)
    {
        $status = Status::publish($command->body);

        $this->statusRepository->save($status, $command->userId);

        $this->dispatchEventsFor($status);

        return $status;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-13
 * Time: 2:09 PM
 */

namespace Larabook\Core;

use App;


trait CommandBus {

    /**
     * execute the command
     *
     * @param $command
     * @return mixed
     */
    public function execute($command)
    {
        return $this->getCommandBus()->execute($command);
    }

    /**
     * fetch the command
     *
     * @return mixed
     */
    public function getCommandBus()
    {
        return App::make('Laracasts\Commander\CommandBus');
    }
} 
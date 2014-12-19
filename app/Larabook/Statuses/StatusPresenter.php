<?php
/**
 * Created by PhpStorm.
 * User: travismartin
 * Date: 14-12-19
 * Time: 3:28 PM
 */

namespace Larabook\Statuses;


use Laracasts\Presenter\Presenter;

class StatusPresenter extends Presenter {

    /**
     * Display how long its been since the published date.
     * @return mixed
     */
    public function timeSincePublished()
    {
        return $this->created_at->diffForHumans();
    }
} 
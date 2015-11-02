<?php
/**
 * Laravel Log Queue
 *
 * @author    Kristoffer Högberg <krihog@gmail.com>
 * @link      https://github.com/hmazter/laravel-log-queue
 */

namespace Hmazter\LaravelLogQueue;

use Illuminate\Queue\Connectors\ConnectorInterface;

class LogConnector implements ConnectorInterface
{
    /**
     * Establish a queue connection.
     *
     * @param  array  $config
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        return new LogQueue();
    }
}

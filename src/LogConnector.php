<?php

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

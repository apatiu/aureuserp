<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Plugin Install Timeout
    |--------------------------------------------------------------------------
    |
    | Installing a plugin from the web UI runs "<plugin>:install" in a queued
    | job. This is how many seconds that command may run before it is stopped.
    | Keep the queue connection's "retry_after" above this value.
    |
    */

    'install_timeout' => (int) env('PLUGIN_INSTALL_TIMEOUT', 1800),

    /*
    |--------------------------------------------------------------------------
    | Plugin Install Queue
    |--------------------------------------------------------------------------
    |
    | The queue connection and queue name the install jobs are pushed to.
    | Null uses the application's default connection and queue.
    |
    */

    'install_queue_connection' => env('PLUGIN_INSTALL_QUEUE_CONNECTION'),

    'install_queue' => env('PLUGIN_INSTALL_QUEUE'),

];

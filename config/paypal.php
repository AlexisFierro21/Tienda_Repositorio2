<?php
return array(
    // set your paypal credential
    'client_id' => 'AckIoyx9hp9WFQO0EnuYMDxYc__Lv46jbp-jsVQuggf67NvVZEdRP5uvoOC0v1hWx_vXdMbpU1K16lxF',
    'secret' => 'EOqA83_MKGI3SqLy8Ts3QREkfoievWMcswm-ofNcm4HE602KrG0zbvzFDxZ9VetfEyWDG8a6dYCt75Ii',
    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
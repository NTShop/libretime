<?php

/* All functions other than start() should be marked as
 * private.
 */
class AirtimeDatabaseUpgrade{

    public static function start(){
        echo "* Updating Database".PHP_EOL;
        self::task0();
    }

    private static function task0(){
        
    }

}
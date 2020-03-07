<?php

    class Connection {
        public static function connect() {
            try {
                $connection = new PDO( 'mysql:host=localhost; dbname=store', 'admin', 'dae123' );
                $connection -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                $connection -> exec( 'SET CHARACTER SET UTF8' );
            }
            catch( Exception $exception ) {
                die( 'Error' . $exception-> getMessage() );
                echo 'At line' . $exception -> getLine();
            }

            return $connection;
        }
    }

?>

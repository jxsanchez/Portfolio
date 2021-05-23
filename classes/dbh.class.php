<?php

class Dbh 
{
    // Connect to database using PDO
    protected function connect()
    {
        // Make sure there are no white spaces in $dsn
        $dsn = env("DSN_STRING");
        $pdo = new PDO($dsn, env("DB_USER"), env("DB_PASS"));
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $pdo;
    }
}

?>
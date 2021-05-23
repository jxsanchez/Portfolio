<?php

include 'dbh.class.php';

class Project extends Dbh
{
    // Return all projects in the database
    public function getProjects()
    {
        // SQL query
        $sql = "SELECT * FROM projects";

        $stmt = $this->connect()->prepare($sql);

        $stmt->execute();

        // Return all rows found in database
        if($rows = $stmt->fetchAll())
        {
            return $rows;   
        }
    }
}
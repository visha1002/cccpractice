<?php

class Core_Model_DB_Adapter
{

    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "tables",
    ];
    public $connect = null;

    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = mysqli_connect(
                $this->config["host"],
                $this->config["user"],
                $this->config["password"],
                $this->config["database"]
            );
        }
        return $this->connect;
    }

    public function fetchAll($query)
    {

    }

    public function fetchPairs($query)
    {

    }

    public function fetchOne($query)
    {

    }

    public function fetchRow($query)
    {
        $row = [];
        $que = mysqli_query($this->connect(), $query);
        while ($_row = mysqli_fetch_assoc($que)) {
            $row = $_row;
        }
        return $row;

    }

    public function insert($query)
    {
        if (mysqli_query($this->connect(), $query)) {
            return mysqli_insert_id($this->connect());
        } else {
            return FALSE;
        }
    }

    public function update($query)
    {

    }

    public function delete($query)
    {

    }

    public function query($query)
    {

    }
}
<?php
class Data_Collection_Object
{
    protected $data = [];

    public function addData($row)
    {
        $this->data[] = new Data_Object($row);
    }

    public function getData()
    {
        return $this->data;
    }
}

class Data_Object
{
    protected $rows = [];

    public function __construct($row)
    {
        $this->rows = $row;
    }

    public function __call($name,$args){
        // print_r($name);
        $name = substr($name,3);
        // echo "<br>";
        // print_r($name);
        // return isset($this->rows[$name])
        //     ? $this->rows[$name]
        //     : $args[0];
        return isset($this->rows[$name])
        ? $this->rows[$name]
        : (isset($args[0]) ? $args[0] : null);
    }
}
?>
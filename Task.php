<?php


class Task
{

    private $id;
    private $description;
    private $completed;
    private $date;

    public function __construct()
    {
    }

    public function get_description()
    {
        return strtoupper($this->description);
    }

    public function get_completed(){
        if ($this->completed) {
            return "SI";
        }else{
            return "NO";
        }
    }
}

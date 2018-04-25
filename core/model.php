<?php
class Model{
    
    public $link;

    /**
     * Model constructor.
     */
    function __construct()
    {
        $this->link = mysqli_connect("127.0.0.1", "root", "", "test");
        session_start();
    }

    function get_data()
    {

    }
}
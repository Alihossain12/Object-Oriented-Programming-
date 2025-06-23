<?php 

/**
 *  Abstract
 * can't able to create instance
 * Only use for inheritance
 * can be use like a parent class
 */
abstract class User {
    public function info() {
        $this->name();
        $this->Degination();
    }

    public function Degination() {
        echo "I am a Plugin Developer". "<br>";
    }
    
    /**
     * Can't have body part
     * can't able to use in this class
     * only use by creating the same name method inside child class
     */
    abstract public function selary();

    public function name() {
        echo "Md: Ali hossain". "<br>";
    }
    
}

class Frontend extends User {
    public function __construct()
    {
        $this->info();
        $this->selary();
    }

    // must be add this method because we have called abstract inside our product class
    public function selary() {
        echo "Selary:$12000". "<br>";
    }
}

 new Frontend();



/**
 * 
 * Interface
 */

interface Developer {
    public function developer_number();
    public function developer_id();
}

class Developer_Manage implements Developer {

    public function __construct()
    {
        $this->developer_number();
        $this->developer_id();
    }

    public function developer_number()
    {
        echo "100" . "<br>";
    }

    public function developer_id(){
        echo "#12". "<br>";
    }
}
 new Developer_Manage();
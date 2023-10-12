<?php

namespace App\Classes;

abstract class Task{
    protected $title;
    protected $description;
    protected $complete;

    //method

    public function __construct($title, $description){
        $this->title = $title;
        $this->description = $description;
        $this->complete = false;
    }

    abstract public function getPriority();
    abstract public function markAsCompleted();

    //Getter

    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }

    public function isComplete(){
        return $this->complete;
    }
}
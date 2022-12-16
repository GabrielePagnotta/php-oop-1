<?php
class movie{
    public $name;
    public $genre;
    public $year;

    function __construct($_n,$_g,$_y){
        $this->name=$_n;
        $this->genre=$_g;
        $this->year=$_y;

    }

    public function isAdult(){
        return  "il film si chiama $this->name, il genere è:$this->genre, 
        è del: $this->year";
    }
    
}

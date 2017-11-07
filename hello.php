<?php

class Movie 
{
    private $title = 'Nom du film';
    private $duration = 120;
    private $description = 'Une description';
    
    public function __construct($title = '')
    {
        $this->title = $title;    
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title = 'name')
    {
        $this->title = $title;
    }
}

$movie = new Movie;

echo $movie->getTitle();
$movie->setTitle("Bunny");
echo $movie->getTitle();
<?php
class Movie {
    public $title;
    public $publisher;
    public $genre;
    public $release;
    public $rating;
    public $director;

    function __construct(string $title, string $publisher, string $genre, int $release, string $rating, Directors $director) {
        $this->title = $title;
        $this->publisher = $publisher;
        $this->genre = $genre;
        $this->release = $release;
        $this->rating = $rating;
        $this->director = $director;
        if($genre == "horror") {
            $this->rating = "18+";
        } else if($genre == "thriller") {
            $this->rating = "15+";
        } else {
            $this->rating = "free";
        }
    }
}
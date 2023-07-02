<?php
    echo "<h1>My watchlist</h1>"  ;

    class Movie {

        public $title;
        public $vote;
        public $release_date;

        public array $topics;

        public function __construct($title, $vote, $release_date, ...$topics) {
    
            $this -> title = $title;
            $this -> vote = $vote;
            $this -> release_date = $release_date;

            $this -> topics = $topics;
    
        }

        public function getFulldetails() {

            return $this -> title . " " . $this -> vote . " " . $this -> release_date;
        }
    }

    $movie1 = new Movie("Scarface", "5/5", "1983");
    $movie2 = new Movie("Taxi Driver", "4/5", "1976", ["Drama", "Crime"]);
    $movie3 = new Movie("Shutter Island", "5/5", "2010");

    echo "<h2>" . $movie1 -> getFulldetails() . "</h2>";

    echo "<br> <br>";

    echo "<h2>" . $movie2 -> getFulldetails() . "</h2>";

    echo "<br> <br>";

    echo "<h2>" . $movie3 -> getFulldetails() . "</h3>" ;

    echo "<br> <br>";


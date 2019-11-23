<?php

namespace ArslanRamay\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        'The First Rule of Chuck Norris is: YOU do not talk about Chuck Norris.',
        'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
        'Chuck Norris counted to infinity... Twice.'
    ];

    public function __construct(array $jokes = null)
    {
        if($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }
}
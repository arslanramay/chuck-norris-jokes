<?php

namespace ArslanRamay\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use ArslanRamay\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        // $this->assertTrue(true);
        $jokes = new JokeFactory([
            'This is a joke 1',
            'This is a joke 2',
            'This is a joke 3',
        ]);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke 3', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'The First rule of Chuck Norris is: you do not talk about Chuck Norris.',
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.'
        ];

        // $this->assertTrue(true);
        $jokes = new JokeFactory();

        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
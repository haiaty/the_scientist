<?php

namespace Tests\Unit\src\Article\ListArticles\ListArticles;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function shouldListArticle()
    {
        $handler = new ListArticles();

        $data = $handler();

        $this->assertEquals($data, [
            [
                'title' => 'Articolo 1',
                'body' => 'Questo è un articolo',
                'creationDate' => '2018-11-29 00:00:00',
            ],
        ]);
    }
}

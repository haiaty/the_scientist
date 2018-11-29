<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class ListArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function it_should_list_articles()
    {
        $response = $this->get('api/articles');

        $response->assertStatus(200);
        $response->assertJson([
            [
            'title' => 'Articolo 1',
            'body' => 'Questo è un articolo',
            'creationDate' => '2018-11-29 00:00:00'
            ]
        ]);
    }
}

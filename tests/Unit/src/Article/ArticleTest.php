<?php

declare(strict_types=1);

namespace Tests\Unit\src\Article;

use DateTime;
use LaravelDay\Article\Article;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateAnArticle()
    {

        $id = 1;
        $title = 'Articolo 1';
                $body = 'Questo è un articolo';
                $creationDate = new \DateTimeImmutable();

                $article = new Article($id, $title, $body, $creationDate);

                $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());


    }
}
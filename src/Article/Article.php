<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: osboxes
 * Date: 29/11/18
 * Time: 9.17.
 */

namespace LaravelDay\Article;

final class Article
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \DateTime
     */
    private $creationDate;
    /**
     * @var int
     */
    private $id;

    public function __construct(int $id, string $title, string $body, \DateTimeImmutable $creationDate)
    {
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}

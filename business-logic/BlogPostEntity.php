<?php
namespace BusinessLogic;

class BlogPostEntity
{
    private int $id;
    private string $title;
    private string $article;
    private \DateTimeInterface $createdAt;

    public function __construct(int $id = 0, string $title = '', string $article = '', \DateTimeInterface $createdAt = null)
    {
        $this->id = $id;
        $this->title = $title;
        $this->article = $article;
        $this->createdAt = ($createdAt)?: new \DateTimeImmutable();
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function article(): string
    {
        return $this->article;
    }

    public function createdAt(): \DateTimeInterface
    {
        return $this->createdAt;
    }
}
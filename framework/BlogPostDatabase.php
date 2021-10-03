<?php
namespace Framework;

use BusinessLogic\BlogPostAccessInterface;
use BusinessLogic\BlogPostEntity;

class BlogPostDatabase implements BlogPostAccessInterface
{

    public function findAll(int $limit = 10): array
    {
        $list = [];
        for ($i = 0; $i < $limit; $i++) {
            $list[] = new BlogPostEntity(1, 'First landed humans on the Moon.', 'Cool staff.', new \DateTimeImmutable('1969-07-16'));
        }

        return $list;
    }
}
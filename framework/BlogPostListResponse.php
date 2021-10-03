<?php
namespace Framework;

use BusinessLogic\BlogPostList;
use BusinessLogic\BlogPostListResponseInterface;

class BlogPostListResponse implements BlogPostListResponseInterface
{
    private BlogPostList $blogPostList;

    public function __construct(BlogPostList $blogPostList)
    {
        $this->blogPostList = $blogPostList;
    }

    public function blogPostList(): array
    {
        return $this->blogPostList->list();
    }
}
<?php
namespace Framework;

use BusinessLogic\BlogPostListRequestInterface;

class BlogPostListRequest implements BlogPostListRequestInterface
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function pageLimit(): int
    {
        return (int)$this->request->get('limit');
    }
}
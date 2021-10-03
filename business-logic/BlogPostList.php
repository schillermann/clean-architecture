<?php
namespace BusinessLogic;

class BlogPostList
{
    private BlogPostAccessInterface $dataAccess;
    private BlogPostListRequestInterface $request;

    public function __construct(BlogPostAccessInterface $blogPostAccess, BlogPostListRequestInterface $request)
    {
        $this->dataAccess = $blogPostAccess;
        $this->request = $request;
    }

    public function list(): array
    {
        return $this->dataAccess->findAll($this->request->pageLimit());
    }
}
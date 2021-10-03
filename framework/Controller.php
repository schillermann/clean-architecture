<?php
namespace Framework;

use BusinessLogic\BlogPostList;

class Controller
{
    public function action(Request $request, BlogPostDatabase $database)
    {
        $blogPostListRequest = new BlogPostListRequest($request);
        $blogPostList = new BlogPostList($database, $blogPostListRequest);
        $blogPostListResponse = new BlogPostListResponse($blogPostList);

        return $blogPostListResponse->html();
    }
}